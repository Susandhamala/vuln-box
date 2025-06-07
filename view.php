<?php include 'header.php';
$page = $_GET['page'] ?? 'index.php';
include $page;
include 'footer.php';
