<?php
/*
 * A route is really just a URL, but saying route makes you sound cooler.
 * When someone hits that URL, you point them to a function or method 
 * that will handle the request.
 * 
 * The below are just examples you can use to understand how it works. Feel free to change it up.
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/services.php';

Flight::route('GET /', function () {
    authFaculty();
    Flight::render('faculty/home', []);
});

Flight::route('GET /login', function () {
    isFacultyLoggedIn();
    Flight::render('faculty/login', []);
});

Flight::group('/admin', function () {

    Flight::route('GET /', function () {
        authAdmin();
        Flight::render('admin/home', []);
    });

    Flight::route('GET /login', function () {
        isAdminLoggedIn();
        Flight::render('admin/login', []);
    });
});

Flight::group('/api', function () {
    Flight::route('GET /users', function () {
        // You could actually pull data from the database if you had one set up
        // $users = Flight::db()->fetchAll("SELECT * FROM users");
        $users = [
            ['id' => 1, 'name' => 'Bob Jones', 'email' => 'bob@example.com'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bsmith@example.com'],
            ['id' => 3, 'name' => 'Suzy Johnson', 'email' => 'suzy@example.com'],
        ];

        // You actually could overwrite the json() method if you just wanted to
        // to Flight::json($users); and it would auto set pretty print for you.
        // https://flightphp.com/learn#overriding
        Flight::json($users, 200, true, 'utf-8', JSON_PRETTY_PRINT);
    });
    Flight::route('GET /users/@id:[0-9]', function ($id) {
        // You could actually pull data from the database if you had one set up
        // $user = Flight::db()->fetchRow("SELECT * FROM users WHERE id = ?", [ $id ]);
        $users = [
            ['id' => 1, 'name' => 'Bob Jones', 'email' => 'bob@example.com'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bsmith@example.com'],
            ['id' => 3, 'name' => 'Suzy Johnson', 'email' => 'suzy@example.com'],
        ];

        $users_filtered = array_filter($users, function ($data) use ($id) {
            return $data['id'] === (int) $id;
        });
        if ($users_filtered) {
            $user = array_pop($users_filtered);
        }

        Flight::json($user, 200, true, 'utf-8', JSON_PRETTY_PRINT);
    });
    Flight::route('POST /users/@id:[0-9]', function ($id) {
        // You could actually update data from the database if you had one set up
        // $statement = Flight::db()->runQuery("UPDATE users SET email = ? WHERE id = ?", [ Flight::data['email'], $id ]);
        Flight::json(['success' => true, 'id' => $id], 200, true, 'utf-8', JSON_PRETTY_PRINT);
    });


    Flight::route('POST /login-faculty', function () {
        loginFaculty();
    });

    Flight::route('POST /login-admin', function () {
        loginAdmin();
    });

    Flight::route('GET /logout', function () {
        logout();
    });

    Flight::route('POST /forgot-password', function () {
        $db = Flight::db();

        $username = Flight::request()->data->username;

        $stmt = $db->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            $token = bin2hex(random_bytes(16));
            $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

            $update = $db->prepare("UPDATE user SET token = :token, expires = :expires WHERE username = :username");
            $update->execute([
                'token' => $token,
                'expires' => $expires,
                'username' => $username
            ]);

            // In production, email the token instead
            Flight::json(['status' => 'success', 'token' => $token]);
        } else {
            Flight::json(['status' => 'error', 'message' => 'User not found']);
        }
    });

    Flight::route('POST /change-password', function () {
        $db = Flight::db();

        $token = Flight::request()->data->token;
        $newPassword = Flight::request()->data->password;

        $stmt = $db->prepare("SELECT * FROM user WHERE token = :token");
        $stmt->execute(['token' => $token]);
        $user = $stmt->fetch();

        if ($user && strtotime($user['expires']) > time()) {
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

            $update = $db->prepare("UPDATE user SET password = :password, token = NULL, expires = NULL WHERE token = :token");
            $update->execute([
                'password' => $hashedPassword,
                'token' => $token
            ]);

            Flight::json(['status' => 'success', 'message' => 'Password changed']);
        } else {
            Flight::json(['status' => 'error', 'message' => 'Invalid or expired token']);
        }
    });

    Flight::route('POST /send-email', function () {
        $email = Flight::request()->data->email;
        $subject = Flight::request()->data->subject;
        $message = Flight::request()->data->message;

        try {
            $mail = Flight::mailer();  // Get the PHPMailer instance

            // Add recipient
            $mail->addAddress($email);

            // Subject and body
            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send email
            if ($mail->send()) {
                Flight::json(['status' => 'success', 'message' => 'Email sent successfully!']);
            } else {
                Flight::json(['status' => 'error', 'message' => 'Email could not be sent.']);
            }
        } catch (Exception $e) {
            Flight::json(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
        }
    });

    Flight::route('POST /upload', function () {
        // Access the database using Flight's db service
        $db = Flight::db();

        // Check if a file is uploaded
        if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            // Get the uploaded file
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];

            // Get the file extension
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Define the allowed file extensions
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'docx'];

            // Validate file extension
            if (!in_array($fileExtension, $allowedExtensions)) {
                Flight::json(['status' => 'error', 'message' => 'Invalid file type']);
                return;
            }

            // Check if file size is within limit (10MB for example)
            if ($fileSize > 10 * 1024 * 1024) {
                Flight::json(['status' => 'error', 'message' => 'File size exceeds 10MB']);
                return;
            }

            // Generate a unique ID for the file name
            $uniqueFileName = uniqid() . '_' . basename($fileName);

            // Define the destination folder
            $uploadDir = __DIR__ . '/../uploads/';

            // Ensure the uploads folder exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Full path to where the file will be saved
            $destPath = $uploadDir . $uniqueFileName;

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // Save the file information to the database
                $stmt = $db->prepare("INSERT INTO files (filename, filepath) VALUES (:filename, :filepath)");
                $stmt->execute([
                    'filename' => $uniqueFileName,
                    'filepath' => $destPath
                ]);

                // Respond with success
                Flight::json(['status' => 'success', 'message' => 'File uploaded successfully', 'filename' => $uniqueFileName]);
            } else {
                Flight::json(['status' => 'error', 'message' => 'Failed to move uploaded file']);
            }
        } else {
            Flight::json(['status' => 'error', 'message' => 'No file uploaded or an error occurred']);
        }
    });
});
