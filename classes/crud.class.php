<?php

  
//verificar se as senhas sao iguais

class Crud extends DB{
   
  public function insert($dados = array()){


    if($this->existeEstudante($dados[0])){
      return false;
    }else{
   	  
    //CADASTRO DO ESTUDANTE

   	$sql = "INSERT INTO estudante(apelido, nome, email, senha, sexo, cidade, estado, anonasc, imagem) VALUES (?,?,?,?,?,?,?,?,?) ";
   	$cadastrar = self::conn()->prepare($sql);
    if($cadastrar->execute($dados)){
       
    //PEGA O ID DO ULTIMO ESTUDANTE CADASTRADO 

    $lastid = self::conn()->lastInsertId();

    //CADASTRO DAS MATERIAS

   for($i=1 ; $i<= 4; $i++){

    $sql1 = "INSERT INTO materia_estudante(id_mat, id_est) VALUES ($i, $lastid)";
    $cadastrarMateria = self::conn()->prepare($sql1);
    $cadastrarMateria->execute();
    }

    //CADASTRO DAS MISSOES

   for($i=1 ; $i<= 4; $i++){

    $sql2 = "INSERT INTO missao_estudante(id_missao, id_est) VALUES ($i, $lastid)";
    $cadastrarMissao = self::conn()->prepare($sql2);
    $cadastrarMissao->execute();
    }

   
    //CADASTRO DOS EMBLEMAS

    for($i=1 ; $i<= 2; $i++){

    $sql3 = "INSERT INTO emblema_estudante(id_emb, id_est) VALUES ($i, $lastid)";
    $cadastrarEmblema = self::conn()->prepare($sql3);
    $cadastrarEmblema->execute();
    }

       return true;
    }else{

       return false;
    }

    } // FIM DO SE EXISTE ESTUDANTE

  }

  public function verificaLogin($apelido, $senha){
    $sql = "SELECT * FROM estudante WHERE apelido = '$apelido' and senha='$senha' LIMIT 1";
    $buscarusuario = self::conn()->prepare($sql);
    $buscarusuario->execute();
    
    $resultado = $buscarusuario->fetch(PDO::FETCH_ASSOC);

   return $resultado;
  }


  private function existeEstudante($apelido){
     $sql = "SELECT apelido FROM estudante WHERE apelido = '$apelido'";
     $executar = self::conn()->prepare($sql);
     $executar->execute();
     if($executar->rowCount() >= 1){
      return true;
     }else{
      return false;
     }
  }


} 
//SELECT nome, objetivo, pontos, concluida FROM missao INNER JOIN missao_estudante ON missao.id = missao_estudante.id_missao and missao_estudante.id_est = X;



