<?php
$user = 'root';
$password = '1234';
$db = 'board';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die("접속 에러");

$db_selected = mysql_select_db(
   $db, 
   $link
) or die("연결 에러");
?>
