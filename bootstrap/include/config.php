<?php
//$connection = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("school", $connection);

$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'school';
$pwd = '';
@$con=mysql_connect($dbhost,$dbuser,$pwd) ;
		@mysql_select_db($dbname,$con) or die('<p id="error_message">SORRY!<br />This website is temporarily unavailable due to ungoing system upgrade.<br /> Please do try again next time...</p>');
       
?>