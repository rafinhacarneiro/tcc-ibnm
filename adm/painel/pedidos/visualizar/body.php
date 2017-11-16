<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	<?php
		include_once("conexao_bd.php");
		
		$q = $_GET["id"];
		
		if(!$q){
			header("location: ../");
		}
		
		$sql = "SELECT * FROM pedidos WHERE ped_id = '$q'";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		
		$nome = $result["ped_nome"];
		$cid = $result["ped_cid"];
		$tel = $result["ped_tel"];
		$email = $result["ped_email"];
		$msg = $result["ped_ped"];
		$id = $result["ped_id"];
		$ok = $result["ped_ok"];
		
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row row-offcanvas row-offcanvas-right">
		
		<a class="btn btn-default" href="../"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
		<?php
			if($ok != 1){
				echo("
				<a class='btn btn-success pull-right' href='../atendido.php?id=$q'><span class='glyphicon glyphicon-ok-sign' aria-hidden='true'></span></a>
				");
			}
		?>
		<hr class="featurette-divider">
		
		<div class="row featurette">
			<div class="col-md-8 col-xs-6">				
				
				<p class="col-sm-2"><right><b>Nome:</b></right></p>
				<p class="col-sm-10"><?= $nome; ?></p>
				
				<p class="col-sm-2"><right><b>Cidade/UF:</b></right></p>
				<p class="col-sm-10"><?= $cid; ?></p>
				
				<p class="col-sm-2"><right><b>Telefone:</b></right></p>
				<p class="col-sm-10"><?= $tel; ?></p>
				
				<p class="col-sm-2"><right><b>Email:</b></right></p>
				<p class="col-sm-10"><?= $email; ?></p>
				
				<p class="col-sm-2"><right><b>Pedido:</b></right></p>
				<p class="col-sm-10"><?= $msg; ?></p>
				
				</div>
			</div>
		</div>
	</div>
</div>