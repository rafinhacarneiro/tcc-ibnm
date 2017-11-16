<div class="navbar-wrapper">
	<div class="container">
		
	<div class="navbar navbar-inverse navbar-static-top">
      
		<div class="navbar-header">
			<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
				
			<a class="navbar-brand vertical-align" href="<?php echo site; ?>"><img src="<?php echo img; ?>/favicon.ico" style="height: 150%; vertical-align: center" alt="IBNM"></a>
			<a class="vertical-align navbar-text" href="<?php echo site; ?>"><b>IBNM</b></a>
		</div>
		
		<div class="clearfix visible-xs-block"></div>
		
		<div class="container">
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right" style="margin-right: 0.2%">
					
					<li class="dropdown"> <!-- SOBRE -->
						<a class="dropdown-toggle" data-toggle="dropdown">Sobre a igreja<b class="caret"></b></a>
							<ul class="dropdown-menu">
							
								<li><a href="<?php echo site; ?>/sobre/historia">Nossa História</a></li>
								<li><a href="<?php echo site; ?>/sobre/visao">Visão e Missão</a></li>
								<li><a href="<?php echo site; ?>/sobre/crenca">Nossa Crença</a></li>
							
								<li class="divider"></li>
							
								<li><a href="<?php echo site; ?>/sobre/propositos">Propósitos</a></li>
								<li><a href="<?php echo site; ?>/sobre/instituicao">Estatuto e Institucional</a></li>
								<li><a href="<?php echo site; ?>/sobre/ministerios">Ministérios e Liderança</a></li>
								
							</ul>
					</li>
					
					<li class="dropdown"> <!-- MIDIAS -->
						<a class="dropdown-toggle" data-toggle="dropdown">Para você<b class="caret"></b></a>
							<ul class="dropdown-menu">
							
								<li><a href="<?php echo site; ?>/blog">Blog</a></li>
								<li><a href="<?php echo site; ?>/midias/fotos">Fotos</a></li>
								<li><a href="<?php echo site; ?>/midias/gravado">Cultos gravados</a></li>
								<li><a href="<?php echo site; ?>/midias/culto">Culto ao vivo</a></li>
								<li><a href="<?php echo site; ?>/midias/revista">Revista Mensal</a></li>
								
								<li class="divider"></li>
								
								<li><a href="http://bibliaonline.com.br/nvi">Bíblia</a></li>
								<li><a href="<?php echo site; ?>/midias/pedidos">Pedidos de Oração</a></li>
								<li><a href="<?php echo site; ?>/midias/redes">Redes Sociais</a></li>
								
							</ul>
					</li>
					
					<li><a href="<?php echo site; ?>/celulas">Células</a></li>

					<li><a href="<?php echo site; ?>/horarios">Horários</a></li>
					
					<li><a href="<?php echo site; ?>/contato">Contato</a></li>
					
					<li><form class="search" method="GET" action="<?php echo site; ?>/busca">
						<input type="text" class="form-search" name="pesquisa" placeholder="Pesquisar...">
						<button type="submit" class="btn-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form></li>
					
				</ul>
			</div>

		</div>
		</div>
		
		</div><!-- /container -->
		</div><!-- /navbar wrapper -->
		
		<!-- CARROSSEL -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			
			<div class="item active">
				<img class="first-slide img-responsive" src="<?php echo img; ?>/fundo1.jpg">
			</div>
			
			<div class="item">
				<img class="second-slide img-responsive" src="<?php echo img; ?>/fundo2.jpg">
			</div>
			
			<div class="item">
				<img class="third-slide img-responsive" src="<?php echo img; ?>/fundo3.jpg">
			</div>
			
			<div class="item">
				<img class="fourth-slide img-responsive" src="<?php echo img; ?>/fundo4.jpg">
			</div>
			
			<div class="item">
				<img class="fifth-slide img-responsive" src="<?php echo img; ?>/fundo5.jpg">
			</div>
			
			<div class="item">
				<img class="sixth-slide img-responsive" src="<?php echo img; ?>/fundo6.jpg">
			</div>
			
		</div>
		</div><!-- /.carousel -->
		
		<script src="<?php echo js; ?>/carousel.js"></script>