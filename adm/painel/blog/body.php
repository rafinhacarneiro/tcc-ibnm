<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	
	<?php
		include_once("conexao_bd.php");
		
		@$q = $_GET["q"];
		
		// PAGINAÇÃO
		$total_reg = 10;	// Total de registros na p�gina
		@$p = $_GET["p"];	// N� da p�gina
        
		if($p==0){
			$pc = 1;
		} else{
			$pc = $p;
		}
        
		$inicio = $pc - 1;
		$inicio *= $total_reg;

		$sql = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT $inicio, $total_reg";
		$query = mysql_query($sql);
		$linhas = mysql_num_rows($query);
		
		$tp = $linhas / $total_reg;
		
		function data($dbd){
			$s1 = explode(" ", $dbd);
			$s2 = $s1[0];
			$s3 = explode("-", $s2);
		
			$dia = $s3[2];
			$mes = $s3[1];
			$ano = $s3[0];
		
			return "$dia/$mes/$ano";
		}
	
		function hora($dbd){
			$s1 = explode(" ", $dbd);
			$s2 = $s1[1];
			$s3 = explode(":", $s2);
			
			$h = $s3[2];
			$min = $s3[1];
			$seg = $s3[0];
			
			return $h."h ".$min."min ".$seg."seg";
		}
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
			if($q == "create"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Post criado com sucesso!
					</div>");
			}
			
			if($q == "edit"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Post editado com sucesso!
					</div>");
			}
			
			if($q == "error"){
				echo("
					<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Aconteceu um erro! Tente novamente!
					</div>");
			}
			
			if($q == "remove"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Post apagado com sucesso!
					</div>");
			}
		?>
		
        <h1 class="page-header">Blog</h1>
		<hr class="featurette-divider">
		  
		<table class="table table-hover">
			<thead>
				<td>Título</td>
				<td>Postagem</td>
				<td>Categoria</td>
				<td>Ações</td>
			</thead>
			<tbody>
			<?php
				while($result = mysql_fetch_array($query)){
					$titulo = $result["blog_titulo"];
					$data = data($result["blog_data"]);
					$hora = hora($result["blog_data"]);
					$cat_id = $result["cat_id"];
					$query2 = mysql_fetch_array(mysql_query("SELECT cat_nome FROM categorias WHERE cat_id = $cat_id"));
					$cat_nome = $query2["cat_nome"];
					$id = $result["blog_id"];
					
					echo("
						<tr>
							<td>$titulo</td>
							<td>$data | $hora</td>
							<td>$cat_nome</td>
							<td>
								<a class='btn btn-success' href='".adm."/painel/blog/visualizar?id=$id'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></a>
								<a class='btn btn-warning' href='".adm."/painel/blog/editar?id=$id'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
								<a class='btn btn-danger' href='".adm."/painel/blog/excluir.php?id=$id'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
							</td>
						</tr>
					");
				}
			?>
			</tbody>
		</table>
        
		<nav class="pull-right">
		<ul class="pagination">
		<?php
			$prox = $pc+1 ;
			$ant = $pc-1;
				
			if(($pc>=1) && ($ant !=0)){
				echo ("<li><a href='".adm."/painel/blog?p=$ant' aria-label='Anterior'>
							<span aria-hidden='true'>&laquo;</span> Anterior
						</a></li>");
			echo ("<li><a href='".adm."/painel/blog?p=$ant'>$ant</a></li>");
			}
								
			echo ("<li class='active'><a href='".adm."/painel/blog?p=$pc'>$pc</a></li>");
								
			if($pc<=$tp){
				echo ("<li><a href='".adm."/painel/blog?p=$prox'>$prox</a></li>");
				echo ("<li><a href='".adm."/painel/blog?p=$prox' aria-label='Próximo'>Próximo 
							<span aria-hidden='true'>&raquo;</span>
						</a></li>");
			}
		?>
		</ul>
		</nav>
	</div>

</div>