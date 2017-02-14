<?php

class Busca extends DB{


  
    public function selecionarMateria($id){
  	  
  	   $sql = "SELECT * FROM materia INNER JOIN materia_estudante ON materia.id = materia_estudante.id_mat and materia_estudante.id_est = $id";
        
       self::conn()->query('SET NAMES utf8');
        
  	   return self::conn()->query($sql);
    }



    public function selecionarMissao($id){
  	  
  	   $sql = "SELECT * FROM missao INNER JOIN missao_estudante ON missao.id = missao_estudante.id_missao and missao_estudante.id_est = $id";
        
       self::conn()->query('SET NAMES utf8');
        
  	   return self::conn()->query($sql);
    }




    

    public function selecionarTopico($idmat){

       $sql = "SELECT * FROM topico WHERE id_mat = $idmat";

       self::conn()->query('SET NAMES utf8');

       return self::conn()->query($sql);
    
    }


        public function selecionarTopico3(){

       $sql = "SELECT * FROM topico ";

       self::conn()->query('SET NAMES utf8');

       return self::conn()->query($sql);
    
    }

    public function selecionarTopico2($id){

       $sql = "SELECT * FROM topico WHERE id = $id";

       self::conn()->query('SET NAMES utf8');

       return self::conn()->query($sql);
    
    }
     
     public function selecionarEstudante(){
          
          $sql = "SELECT * FROM estudante ORDER BY pontos DESC";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }

     public function selecionarExercicio($id){

          $sql = "SELECT * FROM exercicio WHERE topico = $id";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }


       public function selecionarExercicio2($id, $questao){

          $sql = "SELECT * FROM exercicio2 WHERE topico = $id and questao = $questao";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }
      

     public function selecionarExercicio3($id){

          $sql = "SELECT * FROM exercicio2 WHERE topico = $id";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }



     public function selecionarPontos($id){
          
          $sql = "SELECT pontos FROM estudante Where id = $id";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }


     public function selecionarProgresso($id, $id_mat){
          
          $sql = "SELECT progresso FROM materia_estudante Where id_est = $id and id_mat = $id_mat";

          self::conn()->query('SET NAMES utf8');

          return self::conn()->query($sql);

     }


        public function selecionarMateria2(){
      
       $sql = "SELECT * FROM materia";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }








}


?>