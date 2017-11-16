    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
      
        <div class="navbar-header">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="<?= adm; ?>/painel"><?= $_SESSION["login_nome"]; ?></a>
          
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= adm; ?>/painel/">Início</a></li>
            <li><a href="<?= adm; ?>/painel/blog">Blog</a></li>
            <li><a href="<?= adm; ?>/painel/contatos">Contatos</a></li>
            <li><a href="<?= adm; ?>/painel/pedidos">Pedidos de Oração</a></li>
            <li><a href="<?= adm; ?>/painel/configuracoes">Configurações</a></li>
            <li><a href="<?= php; ?>/sair.php">Sair</a></li>
          </ul>
          
        </div>
        
      </div>
    </nav>