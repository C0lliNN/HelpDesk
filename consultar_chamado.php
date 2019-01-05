
<!-- Esse script é utilizado para previnir a entrada nessa página de usuários não autenticados -->

<?php  require_once("scripts/validador_acesso.php")  ?>

<?php

  /* Vamos ler as linhas do arquivo chamados.txt  e vamos colocadas num array */

  $arquivo = fopen("arquivos/chamados.txt","r");

  $registros = array();

  while (!feof($arquivo)){
    $linha = fgets($arquivo);

    if(!empty($linha)){
      $registros[] = $linha;  
    }  

  }



    // Esse variavel contera apenas os chamados correspondentes com as permissoes daquele usuario;

  $registros_exibidos = array();

  foreach($registros as $registro){
    $dados = explode(",",$registro);

      // O usuario com tipo 1 é o adminstrador e pode ver todos os chamados

    if($_SESSION['tipo'] == 1 || trim($dados[3]) == trim($_SESSION['id'])){
        $registros_exibidos[] = $registro;
    }  
  }



  fclose($arquivo);

?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item mr-5">
          <a href="scripts/logoff.php" class="nav-link">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($registros_exibidos as $registro) { 

                $dados = explode(",",$registro);?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$dados[1]?></h6>
                  <p class="card-text"><?=$dados[2]?></p>

                </div>

              <?php } ?>
              </div>

              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>