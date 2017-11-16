<?php

	if(isset($foto)){
		
		// Tamanho máximo
		$tam = 1024 * 1024 * 2; // 3Mb
		
		// Array com as extensões permitidas
		$upload["extesoes"] = array("jpg", "png", "jpeg");
		
		// Valida a extensão do arquivo
		$extensao = strtolower(end(explode(".", $foto["name"])));
		
		if(array_search($extensao, $upload["extesoes"]) === false){
				echo "Por favor, envie arquivos com as seguintes extensões: jpg, jpeg ou png";
				exit; // Para o script
		}

		// Faz a verificação do tamanho
		if ($tam < $foto["size"]) {
			echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
			exit;
		}
		
		$ext = strtolower(substr($foto["name"],-4)); // Extensão do arquivo
		$new = md5(date("YmdHis")).$ext; // Novo nome do arquivo
		$dir = "/../home/pontokc/public_html/3_tecnico/rafael/img/upload/";
		
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (!move_uploaded_file($foto["tmp_name"], $dir.$new)) {
			// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			echo "Não foi possível enviar o arquivo, tente novamente";
		}
	}
	
?>