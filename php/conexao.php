<?php
	ob_start();
	session_start();
	
	include_once("includes.php");
	
	// Form
	$user = $_POST["user"];
	$password = $_POST["senha"];
	
	//Conexão BD
	include_once("conexao_bd.php");
	
	// Pesquisa usuario
	$sql = "SELECT * FROM login WHERE log_user='$user' AND log_senha='$password'";
	$query = mysql_query($sql);
	
	$result = mysql_fetch_assoc($query);
	
	$adm = adm;
	$conex = 0;

	if(($user == $result["log_user"]) && ($password == $result["log_senha"])){
		$_SESSION["login_nome"] = $result["log_nome"];
	
		header("location: $adm/painel");
	} else{
		header("Location: $adm/erro.php");
	}
?>