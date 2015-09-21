<!DOCTYPE html>
<html>
<head>
<title>Display filename of the URL</title>
</head>
<body>
<h2>Problem: display filename only of the url.</h2>

<?php
function urlFileName() {
$dirpath = $_SERVER['PHP_SELF'];

echo "<br>The Filename is: " . basename($dirpath) . "<br/>";
}

urlFileNAme();

?>
</body>
</html>
