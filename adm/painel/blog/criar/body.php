<div class="container-fluid">
	
	<!-- Menu Lateral -->
	<?php include_once("menu.php"); ?>
	<?php
		include_once("conexao_bd.php");
	?>
	
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        		
        <h1 class="page-header">Criar novo post</h1>
		<hr class="featurette-divider">
		
		<form action="criar.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal">
		
			<div class="form-group">
				<label for="titulo" class="col-sm-2 control-label">Título</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="titulo" name="titulo">
				</div>
			</div>
			
			<div class="form-group">
				<label for="editor1" class="col-sm-2 control-label">Resumo</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" rows="5" id="editor1" name="resumo"></textarea>
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
					<textarea rows="10" type="text" class="form-control" id="editor2" name="post"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="tags" class="col-sm-2 control-label">Tags</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="tag" name="tag">
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
														
							echo("
									<option value='$cat_id'>$nome</option>
									");
						}
					?>
					</select>
				</div>
			</div>
			
			<div class="pull-right">
					<input type="hidden" name="id" value="$id"/>
					<input type="submit" class="btn btn-success" value="Postar">
			</div>
			
		</form>
	</div>
	<script src="<?= js; ?>/ckeditor/ckeditor.js"></script>
	<script>CKEDITOR.replace( 'editor1' ); CKEDITOR.replace( 'editor2' );</script>
</div>