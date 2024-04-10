<?php require_once 'autenticacao/verificaLogin.php' ?>

<?php require_once 'includes/cabecalho.php' ?>

<div class="container">

  <?php include_once 'includes/cabecalhoAdmins.php' ?>
  
  <main class="row">

    <?php include_once 'includes/menuAdmim.php' ?>

    <div id="conteudo" class="col-10">
      <h2>Seja bem-vindo <?= $_SESSION['nome'] ?>!</h2>
    </div>

  </main>

  <?php include_once 'includes/rodapeAdmim.php' ?>

</div>

<?php require_once 'includes/rodape.php' ?>