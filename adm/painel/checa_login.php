<?php
	if((!isset($_SESSION["login_nome"])) || (empty($_SESSION["login_nome"]))){
		$adm = adm;
		header("location: $adm");
	}
?>