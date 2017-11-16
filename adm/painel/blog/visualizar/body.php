<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	<?php
		include_once("conexao_bd.php");
		
		$q = $_GET["id"];
		
		if(!$q){
			header("location: ../");
		}
		
		$sql = "SELECT * FROM blog WHERE blog_id = '$q'";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		
		$titulo = $result["blog_titulo"];
		$resumo = $result["blog_resumo"];
		$post = $result["blog_post"];
		$img = $result["blog_imagem"];
		$tag = $result["blog_tag"];
		$cat_id = $result["cat_id"];
		
		$result2 = mysql_fetch_array(mysql_query("SELECT cat_nome FROM categorias WHERE cat_id='$cat_id'"));
		
		$cat = $result2["cat_nome"];
		$id = $result["log_id"];
		$data = $result["blog_data"];
		
		$result2 = mysql_fetch_array(mysql_query("SELECT log_nome FROM login WHERE log_id='$id'"));
		$nome = $result2["log_nome"];
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row row-offcanvas row-offcanvas-right">
		
		<a class="btn btn-default" href="../"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
		
		<a class="btn btn-warning pull-right" href="../editar?id=<?= $q; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
		<a class="btn btn-danger pull-right" href="../excluir.php?id=<?= $q; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
		
		<hr class="featurette-divider">
		
		<div class="row featurette">
			<div class="col-md-8 col-xs-6">
				<p style="font-size: 0.8em"><em>Postado por <?= $nome; ?>. Atualizado <em><?= $data; ?></em></p>
		
					<h2 class="featurette-heading"><?= $titulo; ?></h2>
					<p></p><p class="lead"><?= $resumo; ?></p><p></p>
<p></p>
				</div>
				
				<div class="col-md-4 col-xs-6">

					<img class="featurette-image img-responsive center-block" src="<?= img."/upload/$img"; ?>" alt="<?= $titulo; ?>">

				</div>
			</div>
		<p style="font-size: 0.8em"><em>Categoria: <?= $cat; ?>. Tags:  <?= $tag; ?></em></p>
			<hr class="featurette-divider">
		
			<div class="col-md-12 col-xs-12">
				<p></p>
				<p><?= $post; ?></p>
				<p></p>
			</div>
				</div>
	</div>
</div>