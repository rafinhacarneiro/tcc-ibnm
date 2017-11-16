<?php
	
	session_start();
	ob_start();
	include_once("conexao_bd.php");
	
	$titulo = $_POST["titulo"];
	$resumo = $_POST["resumo"];
	$post = $_POST["post"];
	$cat = $_POST["cat"];
	$tag = $_POST["tag"];
	@$foto = $_FILES["foto"];
	$data = date("Y-m-d H:i:s");
	
	$n = $_SESSION["login_nome"];
	
	$sq = "SELECT log_id FROM login WHERE log_nome = '$n'";
	$query = mysql_query($sq);
	$result = mysql_fetch_assoc($query);
	$id2 = $result["log_id"];
	
	
	include_once("upload.php");
	
	if(!isset($foto)){
		$sql = "INSERT INTO blog (blog_id, blog_titulo, blog_resumo, blog_post, blog_tag, blog_imagem, blog_data, cat_id, log_id) VALUES('' , '$titulo' , '$resumo' , '$post' , '$tag' , '' , '$data' ,  '$cat', '$id2')";
	} else{
		$sql = "INSERT INTO blog (blog_id, blog_titulo, blog_resumo, blog_post, blog_tag, blog_imagem, blog_data, cat_id, log_id) VALUES('' , '$titulo' , '$resumo' , '$post' , '$tag' , '$new' , '$data' ,  '$cat', '$id2')";
	}
	
	$query = mysql_query($sql);
	
	
	if($query){
		header("location: ../?q=create");
	} else{
		header("location: ../?q=error");
	}
	
?>