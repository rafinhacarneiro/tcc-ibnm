<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	<?php
		include_once("conexao_bd.php");
		
		$q = $_GET["id"];
		@$e = $_GET["e"];
		
		if(!$q){
			header("location: ../");
		}
		
		$sql = "SELECT * FROM blog WHERE blog_id = '$q'";
		$query = mysql_query($sql);
		$result = mysql_fetch_array($query);
		
		$titulo = $result["blog_titulo"];
		$resumo = $result["blog_resumo"];
		$post = $result["blog_post"];
		$tag = $result["blog_tag"];
		$cat = $result["cat_id"];
		$nome = $_SESSION["login_nome"];
		
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<?php
		if($e == 1){
			echo("<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Por favor, envie arquivos com as seguintes extensões: jpg, jpeg ou png
					  </div>");
		}
		
		if($e == 2){
			echo ("<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> O arquivo enviado é muito grande, envie arquivos de até 2MB.
						</div>");
		}
		
		if($e == 3){
			echo("<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<strong><span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span></strong> Não foi possível enviar o arquivo, tente novamente
						</div>");
		}
			
		?>
        <h1 class="page-header">Editar</h1>
		<hr class="featurette-divider">
		
		<form action="editar.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal">
		
			<div class="form-group">
				<label for="titulo" class="col-sm-2 control-label">Título</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?= $titulo; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="editor1" class="col-sm-2 control-label">Resumo</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" rows="5" id="editor1" name="resumo"><?= $resumo; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="foto" class="col-sm-2 control-label">Capa do post (.png ou .jpg/.jpeg)</label>
				<div class="col-sm-5">
					<input type="hidden" id="hidden" name="tam_max" value="30000"/>
					<input type="file" class="form-control btn btn-default" id="foto" name="foto">
				</div>
				<p class="col-sm-2 help-block">2MB (.png/.jpg/.jpeg)</p>
			</div>
			
			<div class="form-group">
				<label for="editor2" class="col-sm-2 control-label">Post</label>
				<div class="col-sm-10">
					<textarea rows="10" type="text" class="form-control" id="editor2" name="post"><?= $post; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tags" class="col-sm-2 control-label">Tags</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="tag" name="tag" value="<?= $tag; ?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="categoria" class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-4 cols-xs-12">
					<select class="form-control" id="categoria" name="cat">
					<?php
						$sql = "SELECT * FROM categorias";
						$query = mysql_query($sql);
						
						while($result = mysql_fetch_array($query)){
							$nome = $result["cat_nome"];
							$cat_id = $result["cat_id"];
							
							if($cat == $cat_id){
								echo("
										<option value='$cat_id' checked>$nome</option>
										");
							} else{
								echo("
										<option value='$cat_id'>$nome</option>
										");
							}
						}
					?>
					</select>
				</div>
			</div>
			
			<div class="pull-right">
				<?php
					$sql = "SELECT log_id FROM login WHERE log_nome = '$nome'";
					$query = mysql_query($sql);
					$result = mysql_fetch_array($query);
					$id = $result["log_id"];
				?>
				<input type="hidden" name="id" value="<?= $q ?>"/>
				<input type="submit" class="btn btn-success" value="Atualizar">
			</div>
			
		</form>
	</div>
	<script src="<?= js; ?>/ckeditor/ckeditor.js"></script>
	<script>CKEDITOR.replace( 'editor1' ); CKEDITOR.replace( 'editor2' );</script>
</div>