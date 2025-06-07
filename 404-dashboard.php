<?php include 'init.php';
if (!isAdmin()) {
    http_response_code(404);
    include 'header.php';
    echo "<h2>404 Not Found</h2>";
    include 'footer.php';
    exit;
}
include 'admin.php';
