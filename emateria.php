<?php
   
     include_once("wall.php");
     include_once('classes/db.class.php');
     require_once('classes/busca.class.php');

     $busca = new Busca();  


     $apelido = $_SESSION['usuarioApelido'];
     $id = $_SESSION['usuarioId'];
     $nome = $_SESSION['usuarioNome'];
     $nivel = $_SESSION['usuarioNivel'];
     $email = $_SESSION['usuarioEmail'];
     $sexo = $_SESSION['usuarioSexo'];
     $cidade = $_SESSION['usuarioCidade'];
     $estado = $_SESSION['usuarioEstado'];
     $anonasc = $_SESSION['usuarioAnonasc'];
     $pontos = $_SESSION['usuarioPontos'];
     $imagem = $_SESSION['usuarioImagem'];
  
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
                   

                    <li class="dropdown topbar-user"><a data-hover="dropdown"  class="dropdown-toggle"><img src="img/<?php echo $imagem?>" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $apelido ?></span>&nbsp;<span class="caret"></span></a>
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
                    <li ><a href="administrativo.php"><i class="fa fa-home fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Painel</span></a></li>
                    
                  <li class="active"><a href="emateria.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Editar Matérias</span></a>
                       
                    </li>

                     <li><a href="etopico.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Editar Tópicos</span></a>
                       
                    </li>


                     <li><a href="emissao.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Editar Missões</span></a>
                       
                    </li>

                    
                     <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Editar Exercícios</span></a>
                       
                    </li>

                     <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Editar Emblemas</span></a>
                       
                    </li>
                   
              
                          
                    </li>
                    <li ><a href="Sobre.php"><i class="fa fa-question-circle fa-fw">
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
                           Matérias</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="administrativo.php">Painel Administrativo</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="administrativo.php">Painel</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Matérias</li>
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

                                       
           
                         <div class="col-sm-6">
            
            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            
        </div>

        <div class="col-sm-3">
            <a href="adicionarmateria.php" class="btn btn-primary pull-right h2"><b>ADICIONAR MATÉRIA</b></a>
        </div>

    <div id="list" class="row">
    
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th width="70%">Nome</th>
                   
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($busca->selecionarMateria2() as $linha){   ?>
                <tr>
                    <td><?php  echo $linha['id'] ?> </td>
                    <td><?php  echo $linha['nome'] ?> </td>
                   
                    <td class="actions">
                        
                        <a class="btn btn-warning " href="#">Editar</a>
                        <a class="btn btn-danger "  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>
             
             <?php } ?>    


     
               
            </tbody>
        </table>
    </div>
    
    </div> <!-- /#list -->



    <div id="bottom" class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div> <!-- /#bottom -->


    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Sim</button>
    <button type="button" class="btn btn-info" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>
   


                


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
