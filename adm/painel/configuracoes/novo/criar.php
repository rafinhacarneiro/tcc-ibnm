<?php
	include_once("conexao_bd.php");
	include_once("includes.php");
	
	$nome = $_POST["nome"];
	$user = $_POST["user"];
	$senha1 = $_POST["senha1"];
	$senha2 = $_POST["senha2"];
	
	if($senha1 != $senha2){
		header("location ../?e=password");
	}
	
	$sql = "INSERT INTO login (log_nome, log_user, log_senha) VALUES('$nome', '$user', '$senha1')";
	$query = mysql_query($sql);
	
	$adm = adm."/painel/configuracoes";
	
	if(!$query){
		header("location: $adm/?q=error");
	} else{
		header("location: $adm/?q=create");
	}
?>