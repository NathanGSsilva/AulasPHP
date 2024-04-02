<?php

session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
  header("location: login.php");
  exit;
};

?>



<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Area Administrativa - BookMeNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
  </head>

  <body>
    <div class="container">
      <header id="cabecalho" class="bg-secondary">
        <div class="row justify-content-between">
          <div class="col-2">
            <h1 class="ps-3 text-white">admim</h1>
          </div>
          <div class="col-2 text-end pe-4">
            <a href="logout.php" class="btn btn-primary">Sair</a>
          </div>
        </div>
      </header>
      <main class="row">
        <div id="menu" class="col-md-2">
          <nav>
            <ul class="list-group mt-3">
              <li><a href="#" class="list-group-item">Home</a></li>
              <li><a href="#" class="list-group-item">Clientes</a></li>
              <li><a href="#" class="list-group-item">Usuarios</a></li>
              <li><a href="#" class="list-group-item">Produtos</a></li>
            </ul>
          </nav>
        </div>
        <div id="conteudo" class="col-10">
          <h2>Seja bem-vindo <?=$_SESSION['nome']?>!</h2>
        </div>

      </main>
      <footer class="mt-5 bg-light text-center p-2">
        &copy - todos os doreitos sao reservados
      </footer>
    </div>







   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>