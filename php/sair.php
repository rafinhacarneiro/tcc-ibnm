<?php
	include_once("includes.php");
	
	session_start();
	session_destroy();
	
	$url = url;
	header("location: $url/adm");
?>