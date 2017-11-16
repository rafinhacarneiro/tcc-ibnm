<div class="container-fluid">
	<?php include_once("menu.php"); ?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<?php
			if($e == "password"){
				echo("
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Verifique se os campos de senha estão iguais!
					</div>");
			}
			
			if($e == "empty"){
				echo("
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Campos de senha vazia!
					</div>");
			}
        ?>	
        <h1 class="page-header">Alterar a senha</h1>
		<hr class="featurette-divider">
		
		<form action="alterar.php" method="POST" class="form-horizontal">
			<input type="hidden" name="id" value="<?= $q; ?>">
			<div class="form-group">
				<p class="col-sm-2"><b>Senha nova:</b></p>
				<div class="col-sm-5">
					<input type="password" class="form-control" id="senha1" required name="senha1">
				</div>
			</div>

			<div class="form-group">
				<p class="col-sm-2"><b>Repetir a senha:</b></p>
				<div class="col-sm-5">
					<input type="password" class="form-control" id="senha2" required name="senha2">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-2">
					<button type="submit" class="btn btn-success">Alterar</button>
				</div>
			</div>
			
		</form>
	</div>
	<script src="<?= js; ?>/ckeditor/ckeditor.js"></script>
	<script>CKEDITOR.replace( 'editor1' ); CKEDITOR.replace( 'editor2' );</script>
</div>