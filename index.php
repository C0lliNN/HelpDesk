<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

      <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- Icone -->

    <link rel="icon" href="img/logo.png">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
        <li class="mr-5">
          <a href="cadastro.php" class="btn btn-primary">Cadastrar-se</a>
        </li>
      </ul>

    </nav>

      <!-- Inicio da DIV Principal -->

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form method="post" action="scripts/valida_login.php">
                <div class="form-group">
                  <input required name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input required name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                  <!-- Tratativas de Erros passados por parametro -->

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

                    <div class="text-danger mb-3">
                      Usuário não encontrado!
                    </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>

                    <div class="text-danger mb-3">
                      Senha inválida!
                    </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro3'){ ?>

                    <div class="text-danger mb-3">
                      Faça login antes de acessar essa página!
                    </div>

                <?php } ?>

                <button type="submit" class="btn btn-lg btn-info btn-block">Entrar</button>

              </form>

            </div>
          </div>
        </div>
       

    </div>

  </body>
</html>