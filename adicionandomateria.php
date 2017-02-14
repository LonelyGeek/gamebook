<?php
  session_start();

  
   include_once('classes/db.class.php');
   require_once('classes/crud.class.php');
   require_once('classes/adicionar.class.php');

   $crud = new Crud();
   $adicionando = new Create();

  
   
   $nome =  $_POST['nomemat'];


   $adicionando->adicionarMateria($nome);
 

  echo "$nome";
    
  header("Location:emateria.php"); 





?>