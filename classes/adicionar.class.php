<?php

class Create extends DB{

 public function adicionarMateria($nomeMat){
  	   
       

  	   $sql = "INSERT INTO materia(nome) VALUES ('$nomeMat')";
        
       self::conn()->query('SET NAMES utf8');
        
  	   return self::conn()->query($sql);
    }



}