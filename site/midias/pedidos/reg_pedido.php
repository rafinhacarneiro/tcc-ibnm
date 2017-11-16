<?php
	include_once("conexao_bd.php");
	include_once("includes.php");
	
	$nome = $_POST["nome"];
	$cid = $_POST["cidade"];
	$email = $_POST["email"];
	$tel = $_POST["ddd"]."-".$_POST["telefone"];
	$ped = $_POST["pedido"];
	
	$insert = "INSERT INTO pedidos (ped_nome, ped_cid, ped_email, ped_tel, ped_ped) VALUES('$nome', '$cid', '$email', '$tel', '$ped')";
	$query = mysql_query($insert);
	
	$site = site;
	
	if($query){
		header("location: $site/midias/pedidos?enviado=true");
	} else{
		header("location: $site/midias/pedidos?enviado=erro");
	}
?>