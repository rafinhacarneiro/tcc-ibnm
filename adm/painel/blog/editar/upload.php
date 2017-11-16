<?php
	include_once("includes.php");
	$blog = adm."/painel/blog";
		
	// Tamanho máximo
	$tam = 1024 * 1024 * 2; // 3Mb
	
	// Array com as extensões permitidas
	$upload["extensoes"] = array("jpg", "png", "jpeg");
	
	// Valida a extensão do arquivo
	$extensao = strtolower(end(explode(".", $foto["name"])));
	
	if(array_search($extensao, $upload["extensoes"]) === false){
		header("location: $blog/editar?q=$id&e=1");
	}
	
	// Faz a verificação do tamanho
	if ($tam < $foto["size"]) {
		header("location: $blog/editar?q=$id&e=2");
	}
			
	$ext = strtolower(substr($foto["name"],-4)); // Extensão do arquivo
	$new = md5(date("YmdHis")). $ext; // Novo nome do arquivo
	$dir = "/../home/pontokc/public_html/3_tecnico/rafael/img/upload/";
		
	// Depois verifica se é possível mover o arquivo para a pasta escolhida
	if (!move_uploaded_file($foto["tmp_name"], $dir.$new)) {
		// Não foi possível fazer o upload, provavelmente a pasta está incorreta
		header("location: $blog/editar?q=$id&e=3");
	}
?>