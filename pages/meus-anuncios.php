<?php require 'header.php'; ?>
<?php
  if (empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="../index.php";</script>
    <?php
    exit;
  }
 ?>
<?php require '../classes/anuncios.class.php' ?>

<div class="container">
  <h1>Meus Anúncios</h1>

  <button type="button" name="button" class="btn btn-default"><a href="add-anuncio.php">Adicionar Anúncio</a></button>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Título</th>
        <th>Valor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $a = new Anuncios();

        if (count($a->getMeusAnuncios()) > 0) {
          echo "KKKKKK";
        }
        $anuncios = $a->getMeusAnuncios();

        foreach ($anuncios as $anuncio) :
          ?>
            <tr>
              <td>
                <?php if (!empty($anuncio['url'])): ?>
                <img height="100" src="../assets/images/anuncios/<?php echo $anuncio['url']; ?>"></td>
              <?php else: ?>
                <img src="../assets/images/anuncios/default.jpg" height="50"></td>
              <?php endif; ?>
              <td><?php echo $anuncio['titulo']; ?></td>
              <td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
              <td><a class="btn btn-primary" href="editar-anuncio.php?id=<?php echo $anuncio['id']; ?>">Editar</a>
              <a href="excluir-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php endforeach;

       ?>
    </tbody>
  </table>
</div>
