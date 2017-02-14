<?php

class Updates extends DB{


	public function alterarNota($id_est, $nota, $id_mat){
      
       $sql = "UPDATE materia_estudante SET nota = $nota WHERE id_est = $id_est AND id_mat = $id_mat";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


    public function alterarPontos($id, $pontos, $pontosGanho){

    	$pontosTotal = $pontos + $pontosGanho;
       

       $sql = "UPDATE estudante SET pontos = $pontosTotal WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


    public function alterarProgresso($id, $progresso, $id_mat){
       

       $progresso = $progresso + 20;

       
       $sql = "UPDATE materia_estudante SET progresso = $progresso WHERE id_est = $id  and id_mat = $id_mat";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


    public function alterarCadastro($id, $apelido, $nome, $email, $senha, $cidade, $estado, $anonasc){
      
       

       $sql = "UPDATE estudante SET apelido = '$apelido', nome = '$nome', email = '$email', senha = '$senha', cidade = '$cidade', estado = '$estado', anonasc = '$anonasc' WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }





}