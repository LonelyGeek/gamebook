<?php
  session_start();

  
   include_once('classes/db.class.php');
   require_once('classes/crud.class.php');
   require_once('classes/updates.class.php');

   $crud = new Crud();
   $updates = new Updates();

   $id = $_GET['id'];
   $apelido = $_POST['apelido'];
   $nome =  $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $anonasc = $_POST['anonasc'];
   $imagem = $_FILES['imagem'];



   $updates->alterarCadastro($id, $apelido, $nome, $email, $senha, $cidade, $estado, $anonasc);
 
    
   header("Location:painel.php"); 





?>