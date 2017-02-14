<?php

   session_start();


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

    <title>Gamebook</title>

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
            
                <a class="navbar-brand" href="index.php"> Gamebook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                   
                <ul class="nav navbar-nav navbar-right">
                
                    
                 
                    
                   
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
                    <h2>Login</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
      

      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <?php 
     
            if(isset($_SESSION['loginSuccess'])){
              echo '<div class="alert alert-success" role="alert">';
              echo $_SESSION['loginSuccess'];
              echo "</div>";
              unset ($_SESSION['loginSuccess']);
            }


            if(isset($_SESSION['loginAlert'])){
              echo '<div class="alert alert-danger" role="alert">';
              echo $_SESSION['loginAlert'];
              echo "</div>";
              unset ($_SESSION['loginAlert']);
            }

             

        ?>
        </div>       
    </div>

    

<form class="form-horizontal" method="POST" action="validalogin.php">
<fieldset>
<b>
<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="textinput"></label>   
  <div class="col-md-10">
  <input id="textinput" name="apelido" type="text" placeholder="Apelido" class="form-control input-md" required="">
    
  </div>
</div>




<!-- Password input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="senha"></label>
  <div class="col-md-10">
    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="entrar"></label>
  <div class="col-md-10">
    <button id="entrar"  class="btn btn-primary medio"><b>ENTRAR</b></button>
  </div>
</div>

</fieldset>
</form>

 <a href="#">Esqueceu sua senha?</a> <br> <a href="cadastro.php">Criar uma conta</a>



</b>






                </div>
            </div>
        </div>
    </section>
    
 </header>
    
<?php

include_once "rodape.php"; 

?>