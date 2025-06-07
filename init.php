<?php session_start();
function isLoggedIn() { return isset($_SESSION['username']); }
function isAdmin() { return isset($_SESSION['is_admin']) && $_SESSION['is_admin']; }
?>
