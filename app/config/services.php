<?php

function isFacultyLoggedIn()
{
    if (isset($_SESSION['is_logged_in'])) {
        Flight::redirect('/');
        exit;
    }
}

function isAdminLoggedIn()
{
    if (isset($_SESSION['admin_logged_in'])) {
        Flight::redirect('/admin');
        exit;
    }
}

function authFaculty()
{
    if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
        Flight::redirect('/login');
        exit;
    }
}

function authAdmin()
{
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        Flight::redirect('/admin/login');
        exit;
    }
}

function loginFaculty()
{
    $db = Flight::db(); // Get the PDO instance

    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;

    $stmt = $db->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_logged_in'] = true;

        Flight::json(['status' => 'success', 'message' => 'Login successful', 'redirect' => '/']);
    } else {
        Flight::json(['status' => 'error', 'message' => 'Invalid username or password']);
    }
}

function loginAdmin()
{
    $db = Flight::db(); // Get the PDO instance

    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;

    $stmt = $db->prepare("SELECT * FROM `admin` WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;

        Flight::json(['status' => 'success', 'message' => 'Login successful', 'redirect' => '/admin/']);
    } else {
        Flight::json(['status' => 'error', 'message' => 'Invalid username or password']);
    }
}

function logout()
{
    $redirect = isset($_SESSION['admin_logged_in']) ? '/admin/login' : '/login';

    $_SESSION = [];
    session_destroy();
    Flight::json(['status' => 'success', 'message' => 'Logged out successfully', 'redirect' => 'login']);
}
