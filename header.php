<?php
require_once 'init.php';

// Define is_logged_in() if not already defined
if (!function_exists('is_logged_in')) {
    function is_logged_in() {
        return isset($_SESSION['user_id']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🧬 The Bag VulnBox</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <h1>The Bag VulnBox</h1>
    <nav>
        <a href="index.php">Home</a>
        <?php if (is_logged_in()): ?>
            <a href="dashboard.php">Dashboard</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>