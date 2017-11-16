<div class="container">
	<div class="col-md-10">
	
	<?php @$q = $_GET["q"]; ?>
	
	<div class="row row-offcanvas row-offcanvas-right">
		<?php
			if($q == "reg"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Contato enviado com sucesso!
					</div>");
			}
			
			if($q == "error"){
				echo("
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Aconteceu um erro! Tente novamente!
					</div>");
			}
		?>
		<h1 class="featurette-heading">Contato</h1>
		<hr class="featurette-divider">
		
		<h3>Endereço</h3>
		<p>Rua Cel. Herculano de Araújo, 215 – Novo Mundo – Curitiba – Paraná</p>
		<p>CEP: 81050-090
		<h3>Telefone</h3>
		<p>(41)3247-2874</p>
		<h3>Email</h3>
		<p><a href="mailto:contato@ibnm.com.br?Subject=Contato">contato@ibnm.com.br</a></p>

		<iframe src="https://www.google.com/maps/d/embed?mid=z0Twq43B4Y_k.k-o1SfrCFQdU" width="100%" height="480px"></iframe>
		
		<br/><br/>
		
		<h3>Fale conosco!</h3>
		<form method="POST" class="form-horizontal" action="reg_cont.php" role="form">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" required name="nome" id="nome">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="cidade">Cidade/UF</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" required name="cidade" id="cidade">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email</label>
			<div class="col-sm-10">
			<input type="email" class="form-control" name="email" id="email">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-xs-12" for="telefone">Telefone (com DDD)</label>
			<div class="col-sm-1 col-xs-3">
			<input type="number" class="form-control" name="ddd" maxlength="2">
			</div>
			<div class="col-sm-3 col-xs-9">
			<input type="number" class="form-control" required name="telefone" maxlength="9" id="telefone">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="pedido">Mensagem</label>
			<div class="col-sm-10">
			<textarea type="text" rows="10" class="form-control" required name="msg" id="pedido"></textarea>
			</div>
		</div>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success btn-default">Enviar</button>
		</div>
		</div>
	</form>
	
	</div>
	</div>
	<br/><br/><br/><br/><br/>
	<div class="col-md-2 invisible-xs invisible-sm">
		<div class="list-group"><center>
			<a href="<?= site; ?>/" class="list-group-item">Home</a>
			<a href="<?= site; ?>/sobre" class="list-group-item">Sobre a igreja</a>
			<a href="<?= site; ?>/midias" class="list-group-item">Para você</a>
			<a href="<?= site; ?>/celulas" class="list-group-item">Células</a>
			<a href="<?= site; ?>/horarios" class="list-group-item">Horarios</a>
			<a href="<?= site; ?>/contato" class="list-group-item">Contato</a>
		</center></div>
	</div>
</div>