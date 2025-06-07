<?php include 'init.php'; if (!isLoggedIn()) { header("Location: login.php"); exit; } include 'header.php'; ?>
<h2>Dashboard: Hello <?= htmlspecialchars($_SESSION['username']) ?></h2>
<ul>
    <li><a href="search.php">Search (SQLi)</a></li>
    <li><a href="profile.php?id=<?= $_SESSION['username'] ?>">Profile (IDOR)</a></li>
    <li><a href="comment.php">Comments (XSS)</a></li>
    <li><a href="debug.php">Debug Tool (CMDi)</a></li>
    <li><a href="view.php?page=../logs/passwords.txt">View File (LFI)</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php include 'footer.php'; ?>
