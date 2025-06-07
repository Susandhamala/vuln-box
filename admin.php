<?php include 'init.php'; if (!isAdmin()) { http_response_code(403); exit("403 Forbidden"); } include 'header.php'; ?>
<h2>Admin Control Center</h2>
<pre class="flag">flag{you_have_rooted_the_bagh_box}</pre>
<ul>
    <li><a href="upload.php">Upload backdoor</a></li>
</ul>
<?php include 'footer.php'; ?>
