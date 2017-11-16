<div class="container">
	<div class="col-md-10">
	
	<div class="row row-offcanvas row-offcanvas-right">

	<!-- Chamadas Blog -->
	<?php
		@$enviado = $_GET["enviado"];
		
		if($enviado == "true"){
			echo("
				<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pedido registrado!</strong> Entraremos em contato para acompanha-lo!
				</div>");
		}
		
		if($enviado == "erro"){
			echo("
				<div class='alert alert-danger fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Pedido não registrado!</strong> Tente novamente!
				</div>");
		}
	?>

	<h2 class="featurette-heading">Pedidos de Oração</h2>
	<hr class="featurette-divider">
	
	<p>Envie seu pedido de oração e iremos orar por você e fazer contato para acompanha-lo. Seu pedido será entregue aos responsáveis e você permanecerá totalmente anônimo.</p>
	
	<form method="POST" class="form-horizontal" action="reg_pedido.php" role="form">
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
			<input type="number" class="form-control" required name="ddd" maxlength="2">
			</div>
			<div class="col-sm-3 col-xs-9">
			<input type="number" class="form-control" name="telefone" maxlength="9" id="telefone">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="pedido">Pedido</label>
			<div class="col-sm-10">
			<textarea type="text" rows="10" class="form-control" required name="pedido" id="pedido"></textarea>
			</div>
		</div>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success btn-default">Enviar</button>
		</div>
		</div>
	</form>
	
	<hr class='featurette-divider'>
	
	</div>
	</div>
	<div class="col-md-2">
	<br/><br/><br/><br/><br/>
		
				<div class="list-group"><center>
			<a href="<?= site; ?>/midias/blog" class="list-group-item">Blog</a>
			<a href="<?= site; ?>/midias/fotos" class="list-group-item">Fotos</a>
			<a href="<?= site; ?>/midias/gravados" class="list-group-item">Cultos gravados</a>
			<a href="<?= site; ?>/midias/culto" class="list-group-item">Culto ao vivo</a>
			<a href="<?= site; ?>/midias/revista" class="list-group-item">Revista Mensal</a>
			<a href="http://www.bibliaonline.com/nvi" target="_blank" class="list-group-item">Biblia</a>
			<a href="<?= site; ?>/midias/pedidos" class="list-group-item">Pedidos de Oração</a>
			<a href="<?= site; ?>/midias/redes" class="list-group-item">Redes Sociais</a>
		</center></div>
			
	</div>
	
</div>