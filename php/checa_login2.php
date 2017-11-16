<?php
	ob_start();
	session_start();
	
	include_once("includes.php");
	$adm = adm;
	
	if(isset($_SESSION["login_nome"]) && (!empty($_SESSION["login_nome"]))){
		header("location: $adm/painel");
	}
?>