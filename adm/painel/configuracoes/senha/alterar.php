<?php
	include_once("conexao_bd.php");
	include_once("includes.php");
	
	$id = $_POST["id"];
	$senha1 = $_POST["senha1"];
	$senha2 = $_POST["senha2"];
	
	if((empty($senha1)) || (empty($senha2))){
		header("location ../?e=empty");
	}
	
	if($senha1 != $senha2){
		header("location ../?e=password");
	}
	
	$sql = "UPDATE login SET log_senha='$senha1' WHERE log_id='$id'";
	$query = mysql_query($sql);
	
	$adm = adm."/painel/configuracoes";
	
	if(!$query){
		header("location: $adm/?q=error");
	} else{
		header("location: $adm/?q=edit");
	}
?>