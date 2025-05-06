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
    $uri = $_SERVER['REQUEST_URI'];
    ?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid px-5 py-3">
            <div class="navbar-brand d-flex align-items-center">
                <img src="../../../assets/images/UMakLogo.png" alt="UMak Logo" class="me-3">
                <a href="#" class="text-decoration-none">UNIVERSITY OF MAKATI</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if ($_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/admin/login') {
                        if (isset($_SESSION['is_logged_in']) || isset($_SESSION['admin_logged_in'])) {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= ltrim($uri, '/') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= ltrim($uri, '/dashboard') ?>">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= ltrim($uri, '/account') ?>">Account</a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/admin/login') {
                        if (isset($_SESSION['is_logged_in']) || isset($_SESSION['admin_logged_in'])) {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" onclick="logout(); return false;">Logout</a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    require_once __DIR__ . '/modal.php'; ?>