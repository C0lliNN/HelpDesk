
<?php

	/* Nesse script, nos vamos salvar os chamados que o usuario abrir no arquivo chamados.txt, permitindo sua consulta
		na pagina consultar_chamado.php */

	session_start();

	$arquivo = fopen("../arquivos/chamados.txt","a");

	$titulo = str_replace(",", "-", $_POST['titulo']);
	$categoria = str_replace(",", "-", $_POST['categoria']);
	$descricao = str_replace(",", "-", $_POST['descricao']);

	$texto = $titulo .','. $categoria  .','. $descricao .','. $_SESSION['id'] . PHP_EOL;

	fwrite($arquivo,$texto);

	fclose($arquivo);

	header("Location: ../abrir_chamado.php");



?>