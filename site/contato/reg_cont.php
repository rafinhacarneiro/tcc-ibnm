<?php
	include_once("conexao_bd.php");
	include_once("includes.php");
	
	$nome = $_POST["nome"];
	@$tel = $_POST["ddd"]."-".$_POST["telefone"];
	$cid = $_POST["cidade"];
	$msg = $_POST["msg"];
	@$email = $_POST["email"];
	
	$sql = "INSERT INTO contato (cont_nome, cont_cid, cont_email, cont_tel, cont_msg) VALUES('$nome', '$cid', '$email', '$tel', '$msg')";
	$query = mysql_query($sql);
	
	$site = site;
	
	if($query){
		header("location: $site/contato?q=reg");
	} else{
		header("location: $site/contato?q=error");
	}
?>