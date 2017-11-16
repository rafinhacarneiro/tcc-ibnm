<?php
	session_start();
	include_once("includes.php");
	$php = php;
	include_once("checa_login.php");
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