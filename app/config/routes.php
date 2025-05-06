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
    // authFaculty();
    Flight::render('faculty/dashboard', []);
});


Flight::route('GET /profile', function () {
    // authFaculty();
    Flight::render('faculty/profile', []);
});

Flight::route('GET /login', function () {
    isFacultyLoggedIn();
    Flight::render('faculty/login', []);
});

Flight::group('/admin', function () {

    Flight::route('GET /', function () {
        authAdmin();
        $stmt = Flight::db()->query("SELECT COUNT(*) FROM user");
        $count = $stmt->fetchColumn();

        Flight::render('admin/dashboard', ['count' => $count]);
    });

    Flight::route('GET /login', function () {
        isAdminLoggedIn();
        Flight::render('admin/login', []);
    });

    Flight::group('/account', function () {

        Flight::route('GET /', function () {
            authAdmin();

            $stmt = Flight::db()->query("SELECT * FROM user ORDER BY created_at DESC LIMIT 10");
            $recentRegisters = $stmt->fetchAll(PDO::FETCH_ASSOC);
            Flight::render('admin/create-account', ['recentRegisters' => $recentRegisters]);
        });

        Flight::route('GET /information', function () {
            authAdmin();

            Flight::render('admin/account-information', []);
        });

        Flight::route('GET /licenses', function () {
            authAdmin();

            Flight::render('admin/account-licenses', []);
        });

        Flight::route('GET /research', function () {
            authAdmin();

            Flight::render('admin/research-publications', []);
        });

        Flight::route('GET /security', function () {
            authAdmin();

            Flight::render('admin/account-security', []);
        });
    });
});

Flight::group('/api', function () {
    Flight::route('POST /register-account', function () {
        $db = Flight::db();
        $data = Flight::request()->data;

        $firstName = trim($data->first_name);
        $lastName = trim($data->last_name);
        $position = trim($data->assigned_position);
        $department = trim($data->department);
        $username = trim($data->username);
        $password = trim($data->password);

        // Basic validation
        if (strlen($username) < 4 || strlen($username) > 20) {
            Flight::json(['status' => 'error', 'message' => 'Username must be 4-20 characters long']);
            return;
        }

        if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            Flight::json(['status' => 'error', 'message' => 'Username can only contain letters, numbers, and underscores']);
            return;
        }

        if (strlen($password) < 6) {
            Flight::json(['status' => 'error', 'message' => 'Password must be at least 6 characters long']);
            return;
        }

        // Check if username already exists
        $check = $db->prepare("SELECT id FROM user WHERE username = :username");
        $check->execute(['username' => $username]);

        if ($check->fetch()) {
            Flight::json(['status' => 'error', 'message' => 'Username already taken']);
            return;
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        try {
            $stmt = $db->prepare("
            INSERT INTO user (first_name, last_name, assigned_position, department, username, password)
            VALUES (:first_name, :last_name, :assigned_position, :department, :username, :password)
        ");

            $stmt->execute([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'assigned_position' => $position,
                'department' => $department,
                'username' => $username,
                'password' => $hashedPassword
            ]);

            Flight::json(['status' => 'success', 'message' => 'Account registered successfully', 'redirect' => '/admin/account']);
        } catch (PDOException $e) {
            Flight::json(['status' => 'error', 'message' => 'Registration failed', 'error' => $e->getMessage()]);
        }
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
            $uploadDir = __DIR__ . '/../uploads/' . $_SESSION['username'];

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
