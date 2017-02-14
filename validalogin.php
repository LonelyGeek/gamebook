<?php

session_start();

include_once("config.php");
include_once('classes/db.class.php');
require_once('classes/crud.class.php');

$crud = new Crud();



$apelido = $_POST['apelido'];
$senha = $_POST['senha'];





$resultado = $crud->verificaLogin($apelido, $senha);


if(empty($resultado)){
	$_SESSION['loginAlert'] = "Usuário ou senha inválido";
	header("Location: login.php");
}else{
	$_SESSION['usuarioId'] = $resultado['id'];
	$_SESSION['usuarioApelido'] = $resultado['apelido'];
	$_SESSION['usuarioNome'] = $resultado['nome'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso'];
	$_SESSION['usuarioEmail'] = $resultado['email'];
	$_SESSION['usuarioSenha'] = $resultado['senha'];
	$_SESSION['usuarioSexo'] = $resultado['sexo'];
	$_SESSION['usuarioCidade'] = $resultado['cidade'];
	$_SESSION['usuarioEstado'] = $resultado['estado'];
	$_SESSION['usuarioAnonasc'] = $resultado['anonasc'];
	$_SESSION['usuarioPontos'] = $resultado['pontos'];
	$_SESSION['usuarioNivel'] = $resultado['nivel'];
	$_SESSION['usuarioImagem'] = $resultado['imagem'];


	if($_SESSION['usuarioNivelAcesso'] == 1){
		header("Location: administrativo.php");
	}else{
		header("Location: painel.php");
	}

	
}

?>