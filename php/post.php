<div class="theme-showcase" role="main">      

	<div class="page-header">
		<h1>Cadastrar Post</h1>
	</div>

	<div class="row">
		<div class="col-md-12">
    			<form class="form-horizontal" method="POST" action="<?php echo url;?>/php/cad_post.php" enctype="multipart/form-data">
	  
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Título do post</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="titulo" placeholder="Título">
				</div>
			</div>
		  
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Resumo</label>
				<div class="col-sm-10">
					<textarea class="form-control ckeditor" rows="5" name="resumo" placeholder="Resumo do post"></textarea>
				</div>
			</div>
		  
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Post</label>
				<div class="col-sm-10">
					<textarea class="form-control ckeditor" rows="5" name="post" placeholder="Texto"></textarea>
				</div>
			</div>
		  
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tag" placeholder="Tag">
			</div>
		  	
		  	<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto (500x500)</label>
				<div class="col-sm-10">
					<input name="img" type="file"/>
				</div>
			</div>
		  
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Categorias</label>
				<div class="col-sm-10">
					<select class="form-control" name="categoria_id">
				  		<option>Selecione</option>
						<?php 
							$resultado = mysql_query("SELECT cat_nome FROM categoria");
							while($dados = mysql_fetch_assoc($resultado)){
								echo("<option value='$dados[0]'>$dados[0]</option>");
							}
						?>
					</select>
				</div>
			</div>
		  
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 pull-right">
					<button type="submit" class="btn btn-success">Postar</button>
				</div>
		  	</div>

		</form>
		
		<script src="<?= js; ?>/ckeditor/ckeditor.js"></script>
				
		</div>
	</div>
</div>