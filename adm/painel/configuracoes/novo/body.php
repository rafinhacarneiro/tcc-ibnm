<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	<?php
		include_once("conexao_bd.php");
		@$e = $_GET["e"];	
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<?php
			if($e == "password"){
				echo("
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Verifique se os campos de senha estão iguais!
					</div>");
			}
        ?>	
        <h1 class="page-header">Novo usuário</h1>
		<hr class="featurette-divider">
		
		<form action="criar.php" method="POST" class="form-horizontal">
			<div class="form-group">
				<p class="col-sm-2"><b>Nome de usuário:</b></p>
				<div class="col-sm-5">
					<input type="text" class="form-control" required name="nome">
				</div>
			</div>

			<div class="form-group">
				<p class="col-sm-2"><b>Login:</b></p>
				<div class="col-sm-5">
					<input type="text" class="form-control" required name="user">
				</div>
			</div>
			
			<div class="form-group">
				<p class="col-sm-2"><b>Senha:</b></p>
				<div class="col-sm-5">
					<input type="password" class="form-control" required name="senha1">
				</div>
			</div>
			
			<div class="form-group">
				<p class="col-sm-2"><b>Repetir a senha:</b></p>
				<div class="col-sm-5">
					<input type="password" class="form-control" required name="senha2">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-2">
					<button type="submit" class="btn btn-success">Criar</button>
				</div>
			</div>
			
		</form>
	</div>
	<script src="<?= js; ?>/ckeditor/ckeditor.js"></script>
	<script>CKEDITOR.replace( 'editor1' ); CKEDITOR.replace( 'editor2' );</script>
</div>