<html lang="pt-br">
	<head>
		<title>App Help Desk</title>
		<meta charset="utf-8">

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Icone -->

		<link rel="icon" href="img/logo.png">

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
	          <a href="index.php" class="btn btn-info">Login</a>
	        </li>
	      </ul>
	  	</nav>

	  		<!-- Inicio da DIV Principal -->

	  	<div class="container">    
	      <div style="margin-top: 120px;" class="row d-flex justify-content-center">

	        <div class="card-login">
	          <div class="card">
	            <div class="card-header">
	              Cadastro
	            </div>
	            <div class="card-body">
	              <form method="post" action="scripts/cadastrar_usuario.php">

	              	<div class="form-inline mb-3">
	              		<input class="form-control mr-3" type="Nome" required placeholder="Nome" size="40">
	              		<input class="form-control" type="Nome" required placeholder="Sobrenome" size="40">
	              	</div>

	                <div class="form-group">
	                  <input required name="email" type="email" class="form-control" placeholder="E-mail">
	                </div>

	                <div class="form-group">
	                  <input required name="senha" type="password" class="form-control" placeholder="Senha">
	                </div>

	                <div class="form-group">
	                  <input required name="senha2" type="password" class="form-control" placeholder="Repita a Senha">
	                </div>

	                <button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar</button>

	                	 <!-- Tratativas de Erros passados por parametro -->

	                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') {?>

					<div class="text-success mt-3 ml-5">
						Cadastro realizado com sucesso!
					</div>	                	

					<?php }?>

	                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') {?>

					<div class="text-danger mt-3 ml-5">
						As senhas não coincidem!
					</div>	                	

					<?php }?>

					<?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro2') {?>

					<div class="text-danger mt-3 ml-5">
						Usuário já cadastrado!
					</div>	                	

					<?php }?>

	              </form>

	            </div>
	          </div>
	        </div>
	       </div>

	</body>
</html>