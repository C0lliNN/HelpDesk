
<!-- Esse script é utilizado para previnir a entrada nessa página de usuários não autenticados -->

<?php  require_once("scripts/validador_acesso.php")  ?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Icone -->

    <link rel="icon" href="img/logo.png">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

      <!-- Inicio do Menu -->

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item mr-5">
          <a href="scritps/logoff.php" class="nav-link">Sair</a>
        </li>
      </ul>
    </nav>

      <!-- Inicio da DIV Principal -->

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">

                    <!-- Inicio do Formulario -->
                  
                  <form action="scripts/registra_chamado.php" method="post">
                    <div class="form-group">
                      <label for="cTitulo">Título</label>
                      <input type="text" id="cTitulo" name="titulo" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label for="cCategoria">Categoria</label>
                      <select id="cCategoria" name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="cDescricao">Descrição</label>
                      <textarea id="cDescricao" name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>