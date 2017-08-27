<?php require 'conf.php'; ?>
<?php require 'classes/usuarios.class.php'; ?>
<?php require 'classes/anuncios.class.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - OLY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/master.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="./" class="navbar-brand">OLY</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <?php  if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
            ?><li><a href="pages/meus-anuncios.php">Meus Anúncios</a></li>
              <li><a href="pages/sair.php">Sair</a></li>
              <?php } else { ?>
          <li><a href="pages/cadastre-se.php">Cadastre-se</a></li>
          <li><a href="pages/login.php">Login</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="jumbotron">
        <?php  if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
          $u = new Usuarios();
          $u->getNome($_SESSION['cLogin']);
          ?>
        <h2>Nós temos <?php $a = new Anuncios(); $a->numeroAnuncios();?> anúncios hoje!!!</h2>
        <p>E mais de 500 mil usuarios satisfeitos :)</p>
      <?php } else {?>
        <h2>Nós temos <?php $a = new Anuncios(); $a->numeroAnuncios();?> anúncios hoje!!!</h2>
        <p>E mais de 500 mil usuarios satisfeitos :)</p>
    <?php } ?>
      </div>

      <div class="row">
        <div class="col-sm-3">
          <h5>Pesquisa Avançada</h5>
        </div>
        <div class="col-sm-9">
          <h5>Últimos Anúncios</h5>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
