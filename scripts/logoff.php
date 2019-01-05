<?php

		/* Esse script sera executado quando o usuario clicar no link sair das paginas home.php, abrir_chamado.php
			e consultar_chamado.php. Quando isso acontecer, vamos destroir todas as variaveis de sessao, fazendo isso
			quando o usuario tentar acessar paginas protegidas, ele nao conseguirar.
			 */

	session_start();

	session_destroy();

	header("Location: ../index.php");

?>