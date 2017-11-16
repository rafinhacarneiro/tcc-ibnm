<?php
	include_once("conexao_bd.php");
	
	$img = img;
	
	$sql = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 3";
	$query = mysql_query($sql);
	$linhas = mysql_num_rows($query);
?>

<div class="container marketing">
	<!-- Three columns of text below the carousel -->
	<div class="row">
	
		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="http://fb.com/ibnovomundo" target="_blank">
			<img src="<?php echo img; ?>/facebook.png" alt="Facebook" height="100px" width="100px">
			</a>

		</div><!-- /.col-lg-2 -->

		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="http://twitter.com/ibnovomundo" target="_blank">
			<img src="<?php echo img; ?>/twitter.png" alt="Twitter" height="100px" width="100px">
			</a>

		</div><!-- /.col-lg-2 -->
		
		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="http://flickr.com/photos/ibnovomundo" target="_blank">
          	<img href="http://flickr.com/photos/ibnovomundo" src="<?php echo img; ?>/flickr.png" alt="Flickr" height="100px" width="100px">
			</a>

		</div><!-- /.col-lg-2 -->

		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="https://www.youtube.com/user/batistanovomundo2" target="_blank">
          	<img src="<?php echo img; ?>/youtube.png" alt="YouTube" height="100px" width="100px">
			</a>

		</div><!-- /.col-lg-2 -->
		
		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="<?php echo site; ?>/midias/culto">
			<img src="<?php echo img; ?>/culto.png" alt="Culto" height="100px" width="100px">
			</a>
		</div><!-- /.col-lg-2 -->
		
		<div class="col-md-2 col-xs-4 col-sm-4">

			<a href="<?php echo site; ?>/contato">
			<img src="<?php echo img; ?>/contato.png" alt="Contato" height="100px" width="100px">
			</a>
		
		</div><!-- /.col-lg-2 -->
		
	</div><!-- /.row -->
</div>

<div class="container">
<div class="col-md-10">
	<h2>Últimos posts</h2>
	<!-- Chamadas Blog -->
		
	<hr class="featurette-divider">
	
		<?php
			while($result = mysql_fetch_array($query)){
				$foto = $result["blog_imagem"];
				$titulo = $result["blog_titulo"];
				$resumo = $result["blog_resumo"];
				$id = $result["blog_id"];

				$t1 = explode(" ", $titulo);
				$t2 = implode("-", $t1);

				echo("
				<div class='row featurette'>
					<div class='col-xs-7 col-xs-push-5'>
						
						<h2 class='featurette-heading'>$titulo</h2>
						<p class='lead'>$resumo</p>
					
						<a class='btn btn-default pull-right' href='".site."/blog/post?q=$t2'>Continue lendo...</a>
					
					</div>
				
					<div class='col-xs-5 col-xs-pull-7'><a href='".site."/blog/post?q=$t2'>
					
						<img class='featurette-image img-responsive center-block' src='".$img."/upload/".$foto."' alt='$titulo'>
						
					</a></div>	
					
				</div>
			
				<hr class='featurette-divider'>
				");
			}

			echo("<a class='btn btn-default pull-right' href='".site."/blog' role='button'>Post anteriores »</a>");
		?>
	
</div>

<div class="col-md-2">
	<br/><br/><br/><br/>
		<div class="list-group">
			<center><a href="<?php echo site; ?>/blog" class="list-group-item">Blog</a>
			<a href="<?php echo site; ?>/midias/culto" class="list-group-item">Culto ao vivo</a>
			<a href="<?php echo site; ?>/midias/gravado" class="list-group-item">Cultos gravados</a>
			<a href="<?php echo site; ?>/midias/fotos" class="list-group-item">Fotos</a>
			<a href="<?php echo site; ?>/midias/revista" class="list-group-item">Revista IBNM</a>
			<a href="<?php echo site; ?>/midias/pedidos" class="list-group-item">Pedidos de Oração</a></center>
		</div>
</div>

</div>