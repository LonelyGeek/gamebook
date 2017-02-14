<?php

   session_start();

   //deixar dois campos obrigatorios no nome
   // incluir nickname
   //incluir foto
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>
  
    <title>Cadastro</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modificado.css" rel="stylesheet">
  

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Gamebook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                   
                <ul class="nav navbar-nav navbar-right">
                
                    
                        <a href="login.php" class="btn btn-lg btn-info"><b>Entrar</b></a>
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
    
   

        <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Cadastro</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">


        <?php 
     
            if(isset($_SESSION['cadastroErro'])){
              echo '<div class="alert alert-danger" role="alert">';
              echo $_SESSION['cadastroErro'];
              echo "</div>";
              unset ($_SESSION['cadastroErro']);
            }
        ?>
      


<form class="form-horizontal" action="cadastrando.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<b><div class="form-group">
  <label class="col-md-5 control-label" for="textinput"></label>  
  <div class="col-md-12">
  <input id="textinput" name="apelido" type="text" placeholder="Apelido" class="form-control input-md" required=""> 
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-5 control-label" for="textinput"></label>  
  <div class="col-md-12">
  <input id="textinput" name="nome" type="text" placeholder="Nome Completo" class="form-control input-md" required=""> 
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="email"></label>  
  <div class="col-md-12">
  <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-0 control-label" for="anonasc"></label>
  <div class="col-md-7">
    <select id="anonasc" name="anonasc" class="form-control" >
      <option selected disabled>Ano de Nascimento</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>

    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-0 control-label" for="sexo"></label>
  <div class="col-md-7">
    <select id="sexo" name="sexo" class="form-control" value="selecione">
      <option selected disabled>Sexo</option>
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="cidade"></label>  
  <div class="col-md-12">
  <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="estado"></label>  
  <div class="col-md-12">
 <input id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="senha"></label>
  <div class="col-md-12">
    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-5 control-label" for="confsenha"></label>
  <div class="col-md-12">
    <input id="confsenha" name="confsenha" type="password" placeholder="Confirmar a senha" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="filebutton">Imagem</label>
  <div class="col-md-12">
    <input id="filebutton" name="imagem" class="input-file" type="file" required="">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-5 control-label" for="cadastrar"></label>
  <div class="col-md-12">
    <button id="cadastrar" name="cadastrar" class="btn btn-success medio"><b>CADASTRAR</b></button>
  </div>
</div>

</b></fieldset>
</form>


                </div>
            </div>
        </div>
    </section>
    
 </header>
    
<?php

include_once "rodape.php"; 

?>