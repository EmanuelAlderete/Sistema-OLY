<?php require '../conf.php'; ?>
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
            ?><li><a href="meus-anuncios.php">Meus Anúncios</a></li>
              <li><a href="sair.php">Sair</a></li>
              <?php } else { ?>
          <li><a href="cadastre-se.php">Cadastre-se</a></li>
          <li><a href="login.php">Login</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
