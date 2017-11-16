<?php
	session_start();
	include_once("includes.php");
	$php = php;
	include_once("checa_login.php");
	
	include_once("conexao_bd.php");
	@$q = $_GET["id"];
	@$e = $_GET["e"];

	if(!$q){
		header("location: ../");
	}

	$nome = $_SESSION["login_nome"];

	$result = mysql_fetch_array(mysql_query("SELECT log_id FROM login WHERE log_nome = '$nome'"));
	$log_id = $result["log_id"];

	if($log_id != $q){
		header("location: ../");
	}
?>

<html lang="pt-br">
  <head>
    
    <!-- Configurações -->
    <?php include_once("head.php"); ?>
    
  </head>

  <body>
  
    <!-- Cabeçalho -->
    <?php include_once("header.php"); ?>
    
    <!-- Body -->
    <?php include_once("body.php"); ?>

    <!-- Rodapé -->
    <?php include_once("footer.php"); ?>

  </body>
</html>