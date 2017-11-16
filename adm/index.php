<?php
	include_once("includes.php");
	include_once(url."/php/checa_login2.php");
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="<?= img; ?>/favicon.ico">
    <link rel="shortcut icon" href="<?php echo img; ?>/favicon.ico" type="image/x-icon">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= css; ?>/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= css; ?>/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Dont actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?= js; ?>/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= js; ?>/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
   
      <form class="form-signin" method="POST" action="<?= php; ?>/conexao.php">
        <center><h2 class="form-signin-heading">Faça login</h2></center>
        
        <label for="inputText" class="sr-only">Usuário</label>
        <input type="text" name="user" id="inputText" class="form-control" placeholder="Usuário" required autofocus>
        
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        
        <center><button class="btn btn-lg btn-success" type="submit">Logar</button></center>
      </form>
      
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= js; ?>/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>