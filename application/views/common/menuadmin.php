
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php echo site_url("admin"); ?>">José Guilherme</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav hidden-xs">
        <li><a href="<?php echo site_url("admin/DadosPessoais"); ?>">Dados Pessoais</a></li>
        <li><a href="<?php echo site_url("admin/Projetos"); ?>">Projetos</a></li>
        <li><a href="<?php echo site_url("admin/Formacoes"); ?>">Formações</a></li>
        
      </ul>
      <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm text-center">
        <li class="active"><a href="<?php echo site_url("admin/DadosPessoais"); ?>">Dados Pessoais</a></li>
        <li><a href="<?php echo site_url("admin/Projetos"); ?>">Projetos</a></li>
        <li><a href="<?php echo site_url("admin/Formacoes"); ?>">Formações</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right  hidden-lg hidden-md hidden-sm text-center">
        <li><a href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-log-in"></span> Logoff</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li><a href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-log-in"></span> Logoff</a></li>
      </ul>
    </div>
  </div>
</nav>
