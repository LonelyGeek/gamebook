<?php

session_start();

ob_start();

if(($_SESSION['usuarioId'] == "") and ($_SESSION['usuarioEmail'] == "") and $_SESSION['usuarioSenha'] == ""){

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
   
   $_SESSION['loginAlert'] = "area restrita para usuários cadastrados";
   header("Location: login.php");
   
}

?>