<?php
   
     include_once("wall.php");
     include_once('classes/db.class.php');
     require_once('classes/busca.class.php');

     $busca = new Busca();  


     $id = $_SESSION['usuarioId'];
     $nome = $_SESSION['usuarioNome'];
     $nivel = $_SESSION['usuarioNivel'];
     $pontos = $_SESSION['usuarioPontos'];
     $apelido = $_SESSION['usuarioApelido'];


   $nomeTop = $_GET['top'];
       $idTop = $_GET['id'];
       $idmat = $_GET['idmat'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gamebook</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/all.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="css/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="css/pace.css">
    <link type="text/css" rel="stylesheet" href="css/jquery.news-ticker.css">
    <link type="text/css" rel="stylesheet" href="css/botoes.css">



    <link rel="icon" href="img/blackicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/blackicon.png" type="image/x-icon"/>
</head>
<body>
    <div>
       
         
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

                 

                <a id="logo" href="painel.php" class="navbar-brand"><span class="logo-text" ><img height="40" width="35" src="img/whiteicon.png" alt=""/>  <b>Gamebook</b></span></a>


                </div>

            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                

     
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                   

                    <li class="dropdown topbar-user"><a data-hover="dropdown"  class="dropdown-toggle"><img src="img/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $apelido ?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="perfil.php"><i class="fa fa-user"></i><b>Perfil</b></a></li>
                            <li><a href="editarperfil.php"><i class="fa fa-edit"></i><b>Editar Perfil</b></a></li>
                            <li class="divider"></li>
                            <li><a href="sair.php"><i class="fa fa-key"></i><b>Sair</b></a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>

        </div>
        <!--END TOPBAR-->

        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li ><a href="painel.php"><i class="fa fa-home fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Painel</span></a></li>
                    
                    <li class="active"><a href="materias.php"><i class="fa fa-book fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Matérias</span></a>
                       
                    </li>
                    <li><a href="notas.php"><i class="fa fa-star fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Notas</span></a>
                       
                    </li>
                    <li><a href="recompensadiaria.php"><i class="fa fa-bar-chart-o fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Recompensa diária</span></a>
                      
                    </li>
                    <li><a href="conquistas.php"><i class="fa fa-certificate fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Conquistas</span></a>  
                          
                    </li>
                    <li><a href="Sobre.php"><i class="fa fa-question-circle fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Sobre</span></a> 
                      
                    </li>
                    
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->

            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            <?php echo $nomeTop; ?></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="painel.php">Painel</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="painel.php">Matérias</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="materias.php">Matérias</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Tópicos&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="painel.php">Painel</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active"><?php echo $nomeTop; ?></li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                       


                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="portlet box">


                                   
                                    <div class="portlet-body">

                              




                                  <?php foreach($busca->selecionarTopico2($idTop) as $linha){   ?>


                                             <center>     
                                           <img  src="<?php echo $linha['texto']; ?>" width="900px">
                                            </center>


                                          
                                       
                                           


                                         <div class="col-lg-12">
                                          <br> <br>

                                           <div class="note note-info">
                                                <center> <br> <?php echo $linha['dica']; ?> </center>
                                           </div>

                                           </div>


                                             <div class="col-lg-12">
                                          <a href="exercicio.php?id=<?php echo $idTop ?>&top=<?php echo $nomeTop ?>&idmat=<?php echo $idmat ?>" class="btn btn-success btn-block btn3d"><font size="5">Exercício</font></a>
                                           </div>


                                         <?php } ?> 
                               

                                          <div class="clearfix">
                                    </div>
                                </div>
                            </div>                 
                        </div>             
                    </div>
                </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    
                        <font color="#848181"><b>2016 - Gamebook , Versão 1.0</b></font>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/icheck.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/jquery.news-ticker.js"></script>
    <script src="js/jquery.menu.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.categories.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.tooltip.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/jquery.flot.fillbetween.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.spline.js"></script>
    <script src="js/zabuto_calendar.min.js"></script>
    <script src="js/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="js/highcharts.js"></script>
    <script src="js/data.js"></script>
    <script src="js/drilldown.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/highcharts-more.js"></script>
    <script src="js/charts-highchart-pie.js"></script>
    <script src="js/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="js/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
