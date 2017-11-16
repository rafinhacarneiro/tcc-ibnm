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

		$sql = "SELECT * FROM login ORDER BY log_id DESC LIMIT $inicio, $total_reg";
		$query = mysql_query($sql);
		$linhas = mysql_num_rows($query);
		
		$tp = $linhas / $total_reg;
		
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
			if($q == "create"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Usuário criado com sucesso!
					</div>");
			}
			
			if($q == "edit"){
				echo("
					<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></strong> Usuário editado com sucesso!
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
		
        <h1 class="page-header">Usuários</h1>
		<hr class="featurette-divider">
		  
		<table class="table table-hover">
			<thead>
				<td>Nome</td>
				<td>Login</td>
				<td>Ações</td>
			</thead>
			<tbody>
			<?php
				while($result = mysql_fetch_array($query)){
					$id = $result["log_id"];
					$nome = $result["log_nome"];
					$login = $result["log_user"];
					
					echo("
						<tr>
							<td>$nome</td>
							<td>$login</td>
							<td>
								<a class='btn btn-warning' href='".adm."/painel/configuracoes/senha?id=$id'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
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
				echo ("<li><a href='".adm."/painel/configuracoes?p=$ant' aria-label='Anterior'>
							<span aria-hidden='true'>&laquo;</span> Anterior
						</a></li>");
			echo ("<li><a href='".adm."/painel/configuracoes?p=$ant'>$ant</a></li>");
			}
								
			echo ("<li class='active'><a href='".adm."/painel/configuracoes?p=$pc'>$pc</a></li>");
								
			if($pc<=$tp){
				echo ("<li><a href='".adm."/painel/configuracoes?p=$prox'>$prox</a></li>");
				echo ("<li><a href='".adm."/painel/configuracoes?p=$prox' aria-label='Próximo'>Próximo 
							<span aria-hidden='true'>&raquo;</span>
						</a></li>");
			}
		?>
		</ul>
		</nav>
	</div>

</div>