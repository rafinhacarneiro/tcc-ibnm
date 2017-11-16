<?php
	session_start();
	include_once("conexao_bd.php");
	
	$sql2 = "SELECT log_id FROM login WHERE log_nome = '".$_SESSION["login_nome"]."'";
	$query2 = mysql_query($sql2);
	$result2 = mysql_fetch_array($query2);
	
	$id = $_POST["id"];
	$log = $result2["log_id"];
	$titulo = $_POST["titulo"];
	$resumo = $_POST["resumo"];
	$post = $_POST["post"];
	$cat = $_POST["cat"];
	$tag = $_POST["tag"];
	@$foto = $_FILES["foto"];
	$data = date("Y-m-d H:i:s");
			
	if(!is_file($_FILES["foto"]["tmp_name"])){
		$sql =  "UPDATE blog
					SET blog_id='$id', blog_titulo='$titulo', blog_resumo='$resumo', blog_post='$post', blog_tag='$tag', blog_data='$data', cat_id='$cat', log_id='$log'
					WHERE blog_id = '$id'";
	} else{
		$resultado = mysql_fetch_array(mysql_query("SELECT blog_imagem FROM blog WHERE blog_id='$id'"));
		$arq = $resultado["blog_imagem"];
		$pasta = "/../home/pontokc/public_html/3_tecnico/rafael/img/upload/";
		
		chmod($pasta.$arq, 0755);
		unlink($pasta.$arq);
		
		include_once("upload.php");
		
		$sql =  "UPDATE blog
					SET blog_id='$id', blog_titulo='$titulo', blog_resumo='$resumo', blog_post='$post', blog_tag='$tag', blog_imagem='$new', blog_data='$data', cat_id='$cat', log_id='$log'
					WHERE blog_id = '$id'";
	}
		
	$query = mysql_query($sql) or die(mysql_error());
	
	
	if($query){
		header("location: ../?q=edit");
	} else{
		header("location: ../?q=error");
	}
	
?>