<?php
	include_once("conexao_bd.php");
?>
<div class="container">
	<!-- Chamadas Blog -->
	<?php
		while($result = mysql_fetch_array($query)){
			$foto = $result["blog_imagem"];
			<div class='row featurette'>
					<h2 class='featurette-heading'>$titulo</h2>
					<img class='featurette-image img-responsive center-block' src='".$img."/upload/".$foto."' alt='$titulo'>
				</div>
			</div>
</div>