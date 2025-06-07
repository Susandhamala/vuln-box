<?php include 'header.php'; $cmd = $_GET['cmd'] ?? ''; ?>
<h2>Ping Utility</h2>
<form><input name="cmd" placeholder="127.0.0.1"><button>Ping</button></form>
<pre><?php if ($cmd) echo shell_exec("ping -c 1 $cmd"); ?></pre>
<?php include 'footer.php'; ?>
