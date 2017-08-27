<?php require 'header.php'; ?>

<div class="container">
  <h1>Login</h1>
  <?php require '../classes/usuarios.class.php';
  $u = new Usuarios();
  if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = $_POST['senha'];

    if ($u->login($email, $senha)) {
      ?>
        <script type="text/javascript">window.location.href="../index.php";</script>
      <?php
    } else {
      ?>
      <div class="alert alert-danger">
        Usuário e/ou senha errados.
      </div>
      <?php
    }

  } ?>
  <form class="" method="post">
    <div class="form-group">
      <label for="email">E-mail: </label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha: </label>
      <input type="password" class="form-control" name="senha">
    </div>
    <button type="submit" class="btn">Entrar</button>
  </form>
</div>
