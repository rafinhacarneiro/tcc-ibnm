<?php
	include_once("includes.php");
	include_once("conexao_bd.php");

	@$id = $_GET["id"];
	$blog = adm."/painel/blog";
	
	$result = mysql_fetch_array(mysql_query("SELECT blog_imagem FROM blog WHERE blog_id = '$id'"));
	$img = $result["blog_imagem"];
	$pasta = "/../home/pontokc/public_html/3_tecnico/rafael/img/upload/";
	
	$sql = "DELETE FROM blog WHERE blog_id='$id'";
	$query = mysql_query($sql);
	
	chmod($pasta.$img, 0755);
	unlink($pasta.$img);
	
	if($query){
		header("location: $blog/?q=remove");
	} else{
		header("location: $blog/?q=error");
	}
?>