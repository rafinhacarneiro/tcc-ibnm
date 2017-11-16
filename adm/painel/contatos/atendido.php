<?php
	include_once("includes.php");
	include_once("conexao_bd.php");
	
	$id = $_GET["id"];
	
	$sql = "UPDATE contato SET cont_ok='1' WHERE cont_id='$id'";
	$query = mysql_query($sql);
	
	$adm = adm;
	
	if($query){
		header("location: $adm/painel/contatos?q=ok");
	} else{
		header("location: $adm/painel/contatos?q=error");
	}
?>