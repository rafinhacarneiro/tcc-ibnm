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

	<h2 class="featurette-heading">Redes Sociais</h2>
	<hr class="featurette-divider">
	
	<div class="media">
		<div class="media-left media-middle">
			<a href="http://fb.com/ibnovomundo">
			<img class="media-object" src="<?= img; ?>/facebook.png" alt="Facebook">
			</a>
		</div>
		<div class="media-body media-middle">
			<h4 class="media-heading">Facebook</h4>
		</div>
	</div>
	
	<div class="media">
		<div class="media-left media-middle">
			<a href="http://twitter.com/ibnovomundo">
			<img class="media-object" src="<?= img; ?>/twitter.png" alt="Twitter">
			</a>
		</div>
		<div class="media-body media-middle">
			<h4 class="media-heading">Twitter</h4>
		</div>
	</div>
	
	<div class="media">
		<div class="media-left media-middle">
			<a href="http://flickr.com/photos/ibnovomundo">
			<img class="media-object" src="<?= img; ?>/flickr.png" alt="Flickr">
			</a>
		</div>
		<div class="media-body media-middle">
			<h4 class="media-heading">Flickr</h4>
		</div>
	</div>
	
	<div class="media">
		<div class="media-left media-middle">
			<a href="http://youtube.com/batistanovomundo2">
			<img class="media-object" src="<?= img; ?>/youtube.png" alt="YouTube">
			</a>
		</div>
		<div class="media-body media-middle">
			<h4 class="media-heading">YouTube</h4>
		</div>
	</div>
	
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