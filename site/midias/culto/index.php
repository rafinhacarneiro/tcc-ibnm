<?php
	include_once("includes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		
		<!-- HEAD -->
		<?php include_once("head.php"); ?>
		
	</head>

	<body>
	<?php include_once("header.php"); ?>
	
	<div class="site-wrapper">
	  <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
				
				<br/>
				
				<div class="embed-responsive embed-responsive-16by9">
				<iframe src="http://cdn.livestream.com/embed/ibnm?layout=4&color=0xe7e7e7&autoPlay=true&mute=true&iconColorOver=0x888888&iconColor=0x777777&"></iframe>
				</div>
			
          </div>
        </div>
      </div>
    </div>
	
	<!-- Bootstrap core JavaScript -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo js; ?>/jquery-1.10.2.js"></script>
	<script src="<?php echo js; ?>/bootstrap.min.js"></script>
	<script src="<?php echo js; ?>/offcanvas.js"></script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="<?php echo js; ?>/ie10-viewport-bug-workaround.js"></script>
	
	</body>
</html>