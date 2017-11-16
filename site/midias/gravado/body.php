<?php

	include_once("conexao_bd.php");
	$img = img;
	
	// PAGINAÇÃO
	$total_reg = 10;	// Total de registros na página
	@$p = $_GET["p"];	// Nº da página
        
	if($p==0){
		$pc = 1;
	} else{
		$pc = $p;
	}
        
	$inicio = $pc - 1;
	$inicio *= $total_reg;

	$sql = "SELECT * FROM blog WHERE cat_id = 5 ORDER BY blog_id DESC LIMIT $inicio, $total_reg";
	$query = mysql_query($sql);
	$linhas = mysql_num_rows($query);
	
	$tp = $linhas / $total_reg;
?>

<div class="container">
	<div class="col-md-10">
	
	<div class="row row-offcanvas row-offcanvas-right">

	<!-- Chamadas Blog -->
	<h2 class="featurette-heading">Cultos Gravados</h2>
	<?php

		while($result = mysql_fetch_array($query)){

			$foto = $result["blog_imagem"];
            $titulo = $result["blog_titulo"];
            $resumo = $result["blog_resumo"];
            $id = $result["blog_id"];

			$t1 = explode(" ", $titulo);
			$t2 = implode("-", $t1);

            echo("
			<hr class='featurette-divider'>
			<div class='row featurette'>
				<div class='col-md-8 col-xs-6'>

					<h2 class='featurette-heading'>$titulo</h2>
					<p class='lead'>$resumo</p>
					
					<br/>
					
					<a class='btn btn-default pull-right' href='".site."/blog/post?q=$t2'>Continue lendo...</a>
				</div>
				
				<div class='col-md-4 col-xs-6'>

					<img class='featurette-image img-responsive center-block' src='".$img."/upload/".$foto."' alt='$titulo'>

				</div>

			</div>
			");
		}
	?>
	
	<hr class='featurette-divider'>
	
	<nav class="pull-right">
		<ul class="pagination">
			<?php
				$prox = $pc+1 ;
				$ant = $pc-1;
				
				if(($pc>=1) && ($ant !=0)){
					echo ("<li><a href='".site."/midias/gravado?p=$ant' aria-label='Anterior'>
									<span aria-hidden='true'>&laquo;</span> Anterior
								</a></li>");
					echo ("<li><a href='".site."/midias/gravado?p=$ant'>$ant</a></li>");
				}
								
				echo ("<li class='active'><a href='".site."/midias/gravado?p=$pc'>$pc</a></li>");
								
				if($pc<=$tp){
					echo ("<li><a href='".site."/midias/gravado?p=$prox'>$prox</a></li>");
					echo("<li><a href='".site."/midias/gravado?p=$prox' aria-label='Próximo'>Próximo 
									<span aria-hidden='true'>&raquo;</span>
								</a></li>");
				}
			?>
		</ul>
	</nav>
	
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