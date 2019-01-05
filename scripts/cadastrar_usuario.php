
<?php

	session_start();

		/* Recebendo variaveis */

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha2'];

	$array_app = array();

		/* Crie essa variavel para evitar um bug,
		   como tem varias funcoes header(), a ultima sempre acabava sendo executada independentemente,
		   de qual erro fosse encontrado. Essa variavel resolve esse problema */

	$erro = false;

		/* Leitura do arquivo */

	$arquivo = fopen("../arquivos/usuarios.txt","r");

	while(!feof($arquivo)){
		$linha = fgets($arquivo);

		if(!empty($linha)){
			$array_app[] = explode(",",$linha);
		}
	}

	fclose($arquivo);

		/* Se os campos 'Senha' e 'Repita sua senha' forem diferente, entao vamos retornar para
			pagina cadastro e exibir um erro */

	if($senha != $senha2){
		
		header("Location: ../cadastro.php?cadastro=erro");
		$erro = true;
	}

		/* Se o email ja estiver cadastrado, vamos voltar para a pagina cadastro e exibir um erro */


	foreach($array_app as $usuario) {

		echo strtolower($usuario[2]) . '<br>';
		echo strtolower($email);

		if(strtolower($usuario[2]) == strtolower($email) && !$erro){
			header("Location: ../cadastro.php?cadastro=erro2");
			$erro = true;
		}	
	}

		/* Se nao for encontrado nenhum erro, vamos adicionar o usuario no arquivo,
			retornar para pagina cadastro e exibir uma mensagem de sucesso! */

	if(!$erro){
		$arquivo = fopen("../arquivos/usuarios.txt","a");

		fwrite($arquivo, count($array_app)+1 . ',' . '2' . ',' . $email . ',' . $senha . PHP_EOL);

		fclose($arquivo);

		header("Location: ../cadastro.php?cadastro=sucesso");	
	}

?>