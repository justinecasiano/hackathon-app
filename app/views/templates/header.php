<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UMak CCIS Faculty Management Hub</title>

    <!-- Site icon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/images/CCISLogo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../../assets/styles/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="../../../assets/scripts/utilities.js" defer></script>
</head>

<body>

    <?php
    $isAdminPage = isset($_SESSION['admin_logged_in']) ? true : false;
    ?>
    <header>
        <nav>
            <div class="navbar-left">
                <img src="../../../assets/images/UMakLogo.png" alt="UMak Logo">
                <a href="#">UNIVERSITY OF MAKATI</a>
            </div>
            <ul class="navbar-right">
                <?php
                if (!str_contains($_SERVER['REQUEST_URI'], 'admin')) {
                ?>
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="#">CV</a></li>
                    <?php
                } else {
                    if ($_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/admin/login') {
                        if (isset($_SESSION['is_logged_in']) || isset($_SESSION['admin_logged_in'])) {
                    ?>
                            <li><a href="<?= $isAdminPage ? '/admin' : '/' ?>">Dashboard</a></li>
                            <li><a href="<?= $isAdminPage ? '/admin/account' : '/account' ?>">Account</a></li>
                <?php
                        }
                    }
                }
                ?>
                <?php
                if ($_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/admin/login') {
                    if (isset($_SESSION['is_logged_in']) || isset($_SESSION['admin_logged_in'])) {
                ?>
                        <li><a onclick="logout(); return false;">Logout</a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </nav>
    </header>

    <?php
    require_once __DIR__ . '/modal.php'; ?>