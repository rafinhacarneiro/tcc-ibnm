<?php

	include_once("conexao_bd.php");
	$img = img;
	
	// PAGINAÇÃO
	$total_reg = 10;	// Total de registros na página
	@$p = $_GET["p"];	// Nº da página
	@$pesquisa = $_GET["pesquisa"];
	$pes = "%".$pesquisa."%";
        
	if($p==0){
		$pc = 1;
	} else{
		$pc = $p;
	}
        
	$inicio = $pc - 1;
	$inicio *= $total_reg;
	
	$sql = "SELECT * FROM blog WHERE blog_tag LIKE '$pes' OR blog_resumo LIKE '$pes' OR blog_titulo LIKE '$pes' OR blog_post LIKE '$pes' ORDER BY blog_id DESC LIMIT $inicio, $total_reg";
	$query = mysql_query($sql);
	$linhas = mysql_num_rows($query);
	
	$tp = $linhas / $total_reg;
?>

<div class="container">
	<div class="col-md-10">
	
	<div class="row row-offcanvas row-offcanvas-right">

	<!-- Chamadas Blog -->
	<h2 class="featurette-heading">Pesquisa: <?= $pesquisa; ?></h2>
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
					echo ("<li><a href='".site."/busca?p=$ant&pesquisa=$pesquisa' aria-label='Anterior'>
									<span aria-hidden='true'>&laquo;</span> Anterior
								</a></li>");
					echo ("<li><a href='".site."/busca?p=$ant&pesquisa=$pesquisa'>$ant</a></li>");
				}
								
				echo ("<li class='active'><a href='".site."/busca?p=$pc&pesquisa=$pesquisa'>$pc</a></li>");
								
				if($pc<=$tp){
					echo ("<li><a href='".site."/busca?p=$prox&pesquisa=$pesquisa'>$prox</a></li>");
					echo("<li><a href='".site."/busca?p=$prox&pesquisa=$pesquisa' aria-label='Próximo'>Próximo 
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
		<?php
			$sql2 = "SELECT cat_nome FROM categorias";
			$query2 = mysql_query($sql2);
		?>
		
		<div class="list-group"><center>
		<?php
			while($result2 = mysql_fetch_array($query2)){
				$site = site;
				$cat = $result2["cat_nome"];
				echo("<a href='$site/blog/categorias?q=$cat' class='list-group-item'>$cat</a>");
			}
		?>
		</center></div>
	</div>
	
</div>