<?php

  session_start();

  session_destroy();

  unset($_SESSION['usuarioId'] ,
	    $_SESSION['usuarioNome'] ,
	    $_SESSION['usuarioNivelAcesso'], 
	    $_SESSION['usuarioEmail'], 
	    $_SESSION['usuarioSenha'],
	    $_SESSION['usuarioCidade'],
	    $_SESSION['usuarioEstado'],
	    $_SESSION['usuarioPontos'],
	    $_SESSION['usuarioNivel'],
	    $_SESSION['usuarioAnonasc'],
	    $_SESSION['usuarioSexo']);

  header("Location: login.php");

?>