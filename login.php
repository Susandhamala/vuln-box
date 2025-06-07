<?php
include 'init.php'; include 'db.php'; include 'header.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $stmt = $pdo->query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['role'] === 'admin';
        header("Location: dashboard.php");
        exit;
    } else { $error = "Access Denied. Try harder."; }
}
?>
<h2>Login to breach</h2>
<form method="POST">
    <input name="username" placeholder="Username" required />
    <input name="password" type="password" placeholder="Password" required />
    <button type="submit">Login</button>
</form>
<p><?= $error ?></p>
<?php include 'footer.php'; ?>
