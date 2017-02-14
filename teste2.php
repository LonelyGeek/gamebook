              <?php
                                           

                                         $num = 1;

                                         foreach($busca->selecionarExercicio($idTop) as $linha){    //deixar random as alternativas
                                                                                                    //deixar campos obrigatórios
                                          ?>                                                       

                                        <font size="3">
                                        <form action="resultado.php?idmat=<?php echo $idmat ?>"  method="POST">
                                                 
    

                                      <b><?php echo $linha['pergunta']; ?></b> <hr>  


    <input type="radio" name="pergunta<?php echo $num ?>" value="verdadeiro" > Verdadeiro<br><br>
    <input type="radio" name="pergunta<?php echo $num ?>" value="falso" > Falso<br><br> <br>  

   
        


                                 <?php $num++; }  ?> 

                                            



            <a href="#" class="btn btn-info btn-lg btn3d"><font size="4">Voltar</font></a>
            <input class="btn btn-success btn-lg btn3d" type="submit" value="Verificar">   <!-- ARRUMAR PARA QUANDO COMPLETAR EXERCICIO, FECHAR ELE-->


                                        </form>
                                        </font>
