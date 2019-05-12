<html>
<?php
$name = $_GET['name'];
$msg = 'Welcome '.$name;
?>
<head>
<title><? echo($name); /* XSS 1 */ ?></title>
</head>
<body>
<? echo($msg); /* XSS 2 */ ?>
</body>
</html>