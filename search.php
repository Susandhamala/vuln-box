<?php include 'init.php'; include 'db.php'; include 'header.php';
$q = $_GET['q'] ?? '';
$results = [];
if ($q) {
    $stmt = $pdo->query("SELECT * FROM users WHERE username LIKE '%$q%'");
    $results = $stmt->fetchAll();
}
?>
<h2>Search Users</h2>
<form><input name="q" value="<?= $q ?>"><button>Search</button></form>
<p>Results for: <b><?= $q ?></b></p>
<ul>
<?php foreach ($results as $user): ?>
<li><?= htmlspecialchars($user['username']) ?></li>
<?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>
