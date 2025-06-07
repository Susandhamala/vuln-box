<?php
include 'init.php';
if (!isAdmin()) { http_response_code(403); exit("Access denied."); }

$uploadPath = 'uploads/';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];
    $target = $uploadPath . basename($file['name']);

    // VERY INSECURE: Accept all files (intentionally vulnerable)
    if (move_uploaded_file($file['tmp_name'], $target)) {
        $message = "Uploaded successfully to <a href='$target'>$target</a>";
    } else {
        $message = "Upload failed.";
    }
}

include 'header.php';
?>
<h2>Upload a backdoor</h2>
<p class="flag"><?= $message ?></p>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button>Upload</button>
</form>
<p><strong>Note:</strong> Only <code>.php</code> files are interpreted!</p>
<?php include 'footer.php'; ?>
