<?php
$connect=mysql_connect('localhost','root','');
if (!$connect) {
	die('Could not connect to database');
}

mysql_select_db("sharemarket",$connect);
?>