<?php require 'header.php'; ?>

<div class="container">
  <h1>Cadastre-se</h1>
  <?php require '../classes/usuarios.class.php';
  $u = new Usuarios();
  if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = $_POST['senha'];
    $telefone = addslashes($_POST['fone']);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
      if ($u->cadastrar($nome, $email, $senha, $telefone)) { ?>
        <div class="alert alert-success">
          Cadastro efetuado com sucesso :) <a href="login.php"><strong>Faça o login agora!!!</strong></a>
        </div>
        <?php
    } else {
      ?>
      <div class="alert alert-warning">
        Este endereço de e-mail já está em uso. Deseja <a href="login.php"><strong>realizar login?</strong></a>
      </div>
      <?php
    }} else { ?>
      <div class="alert alert-warning">
        Preencha todos os campos.
      </div>

  <?php }} ?>
  <form class="" method="post">
    <div class="form-group">
      <label for="nome">Nome: </label>
      <input type="text" class="form-control" name="nome">
    </div>
    <div class="form-group">
      <label for="email">E-mail: </label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha: </label>
      <input type="password" class="form-control" name="senha">
    </div>
    <div class="form-group">
      <label for="fone">Telefone: </label>
      <input type="text" class="form-control" name="fone">
    </div>
    <button type="submit" class="btn">Cadastrar-se</button>
  </form>
</div>
