<?php include 'init.php'; include 'db.php'; include 'header.php';
$id = $_GET['id'] ?? '';
$stmt = $pdo->query("SELECT * FROM users WHERE username = '$id'");
$user = $stmt->fetch();
if (!$user) { echo "No user found."; exit; }
?>
<h2>Profile of <?= $user['username'] ?></h2>
<p>Email: <?= $user['email'] ?></p>
<?php include 'footer.php'; ?>
