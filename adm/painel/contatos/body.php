<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	
	<?php
	
		include_once("conexao_bd.php");
		
		@$q = $_GET["q"];
		
		// PAGINA��O
		$total_reg = 10;	// Total de registros na p�gina
		@$p = $_GET["p"];	// N� da p�gina
        
		if($p==0){
			$pc = 1;
		} else{
			$pc = $p;
		}
        
		$inicio = $pc - 1;
		$inicio *= $total_reg;

		$sql = "SELECT * FROM contato ORDER BY cont_id DESC LIMIT $inicio, $total_reg";
		$query = mysql_query($sql);
		$linhas = mysql_num_rows($query);
		
		$tp = $linhas / $total_reg;
		
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
			if($q == "ok"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Contato atendido com sucesso!
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
		
        <h1 class="page-header">Contatos</h1>
		<hr class="featurette-divider">
		  
		<table class="table table-hover">
			<thead>
				<td>Nome</td>
				<td>Cidade</td>
				<td>Telefone</td>
				<td>Mensagem</td>
			</thead>
			<tbody>
			<?php
				while($result = mysql_fetch_array($query)){
					$nome = $result["cont_nome"];
					$cid = $result["cont_cid"];
					$tel = $result["cont_tel"];
					$id = $result["cont_id"];
					$ok = $result["cont_ok"];
					
					echo("
						<tr>
							<td>$nome</td>
							<td>$cid</td>
							<td>$tel</td>
							<td>
								<a class='btn btn-success' href='".adm."/painel/contatos/visualizar?id=$id'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></a>
					");
					
					if($ok != 1){
						echo("
								<a class='btn btn-success' href='".adm."/painel/contatos/atendido.php?id=$id'><span class='glyphicon glyphicon-ok-sign' aria-hidden='true'></span></a>
						");
					}
					
					echo("
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
				echo ("<li><a href='".adm."/painel/contatos?p=$ant' aria-label='Anterior'>
							<span aria-hidden='true'>&laquo;</span> Anterior
						</a></li>");
			echo ("<li><a href='".adm."/painel/contatos?p=$ant'>$ant</a></li>");
			}
								
			echo ("<li class='active'><a href='".adm."/painel/contatos?p=$pc'>$pc</a></li>");
								
			if($pc<=$tp){
				echo ("<li><a href='".adm."/painel/contatos?p=$prox'>$prox</a></li>");
				echo ("<li><a href='".adm."/painel/contatos?p=$prox' aria-label='Pr�ximo'>Pr�ximo 
							<span aria-hidden='true'>&raquo;</span>
						</a></li>");
			}
		?>
		</ul>
		</nav>
	</div>

</div>