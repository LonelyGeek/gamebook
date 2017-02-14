<?php
  session_start();

   
   include_once('classes/db.class.php');
   require_once('classes/crud.class.php');

   $crud = new Crud();


   $apelido = $_POST['apelido'];
   $nome =  $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $sexo = $_POST['sexo'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $confsenha = $_POST['confsenha'];
   $anonasc = $_POST['anonasc'];
   $imagem = $_FILES['imagem'];

  $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

  $novo_nome = md5(time()) . $extensao;
  $diretorio = "img/";

  move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);


 

   if( $sexo != "masculino" and  $sexo != "feminino"){ 

	    $_SESSION['cadastroErro'] = "<b>Atenção:</b> Selecione um sexo.";
	    header("Location: cadastro.php");

    }else if (!is_numeric($anonasc)){ 

        $_SESSION['cadastroErro'] = "<b>Atenção:</b> Selecione um ano de nascimento.";
	    header("Location: cadastro.php");

    }else{
    
    $dados = array($apelido, $nome, $email, $senha, $sexo, $cidade, $estado, $anonasc, $novo_nome);

    if($crud->insert($dados)){
        $_SESSION['loginSuccess'] = "Cadastrado com sucesso.";
        header("Location: login.php");
	}else{
		$_SESSION['cadastroErro'] = "<b>Atenção:</b> Email já registrado no sistema.";
		header("Location: cadastro.php");
	}

	}





?>