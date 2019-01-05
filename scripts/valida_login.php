<?php

	session_start();

	$array_app = array();

		/* Lendo usuarios do arquivo e colocando-os em um arrya */

	$arquivo = fopen("../arquivos/usuarios.txt","r");

	while(!feof($arquivo)){
		$linha = fgets($arquivo);

		if(!empty($linha)){
			$array_app[] = explode(",",$linha);
		}
	}
	
		// Variaveis de Controle

	$controle_email = false;
	$autenticado = false;
	$id_autenticado = null;
	$tipo_autenticado = null;

		/*
		Nesse ponto, estamos percorrendo o array de usuarios, tetando procurar o email informado no arquivo,
		se acharmos vamos verificar se a senha coincide, se for vamos atualizar as variaveis de entrada e dar
		acesso ao usuario
		*/

	foreach($array_app as $usuario){

		if($usuario[2] == $_POST['email']){
			$controle_email = true;
			if(trim($_POST['senha']) == trim($usuario[3])){
				$autenticado = true;
				$id_autenticado = $usuario[0];
				$tipo_autenticado = $usuario[1];
				break;
			}
		}
	}

		// Atualizando as variaveis de sessao caso o usuario esteja logado,
		// Definindo possiveis erros

	if($autenticado){
		header("Location: ../home.php");
		$_SESSION['autenticado'] = 'sim';
		$_SESSION['id'] = $id_autenticado;
		$_SESSION['tipo'] = $tipo_autenticado;
		 
	} else if($controle_email){
		$_SESSION['autenticado'] = 'nao';
		header('Location: ../index.php?login=erro2');
	} else{
		$_SESSION['autenticado'] = 'nao';
		header('Location: ../index.php?login=erro');
	}
	

?>