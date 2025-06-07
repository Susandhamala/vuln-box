<?php include 'db.php'; include 'header.php';
if ($_POST) {
    $comment = $_POST['comment'];
    $pdo->exec("INSERT INTO comments (content) VALUES ('$comment')");
}
$comments = $pdo->query("SELECT * FROM comments")->fetchAll();
?>
<h2>Message Board</h2>
<form method="POST"><textarea name="comment"></textarea><button>Post</button></form>
<?php foreach ($comments as $row): ?>
<div><?= $row['content'] ?></div>
<?php endforeach; ?>
<?php include 'footer.php'; ?>
