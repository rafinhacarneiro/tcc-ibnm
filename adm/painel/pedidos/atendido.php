<?php
	include_once("includes.php");
	include_once("conexao_bd.php");
	
	$id = $_GET["id"];
	
	$sql = "UPDATE pedidos SET ped_ok='1' WHERE ped_id='$id'";
	$query = mysql_query($sql);
	
	$adm = adm;
	
	if($query){
		header("location: $adm/painel/pedidos?q=ok");
	} else{
		header("location: $adm/painel/pedidos?q=error");
	}
?>