<?php

	/* Esse script não vai permitir que usuário não autenticados acessem páginas protegidas */

  session_start();

  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim'){
    header('Location: index.php?login=erro3');
  } 

?>