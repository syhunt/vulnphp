<?
$username = $_GET['username'];
$result=mysql_query('SELECT * FROM users WHERE username="'.$username.'"');
?>