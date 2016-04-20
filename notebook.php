<?php

    session_start();

    if (!isset($_SESSION['email'])) {

        header("Location: index.php");
        exit();
    }
?>

<?php
    require '_Configuracao.php';
    require '_Conexao.php';
    require '_Database.php';

    $leitura = DBLer('notebook');
?>

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>DTICZando</title>
    <link rel="shortcut icon" href="assets/img/logo310.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-style.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
        body {
            padding-top: 60px;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function(){

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });

    </script>



</head>
<body>

<!-- NAVIGATION MENU -->

<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"><img src="assets/img/logo30.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php"><i class="icon-home icon-white"></i> Início</a></li>
                <li><a href="cadastrar.php"><i class="icon-folder-open icon-white"></i> Cadastrar</a></li>
                <li><a href="remover.php"><i class="icon-calendar icon-white"></i> Remover</a></li>
                <li><a href="sobre.php"><i class="icon-th icon-white"></i> Sobre</a></li>
                <li><a href="_DesAutenticacao.php"><i class="icon-lock icon-white"></i> Sair</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <!-- FIRST ROW OF BLOCKS -->
    <div class="row">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Patrimônio</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($leitura as $ler){  ?>
                            <tr>
                                <td><?php echo $ler['marca']; ?> </td>
                                <td><?php echo $ler['modelo']; ?> </td>
                                <td><?php echo $ler['patrimonio']; ?> </td>
                                <td><?php echo $ler['status']; ?> </td>
                                <td><a class="btn3" href="_DeletandoMaterial.php?id=<?php echo $ler['id']; ?>&pagina=notebook" >  X  </a> </td>

                            </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" method="post" action="_CadastrandoMaterial.php">
                        <input type="text" placeholder="Marca" name="marca">
                        <input type="text"  placeholder="Modelo" name="modelo">
                        <input type="text"  placeholder="Patrimonio" name="patrimonio">
                        <select name="status">
                            <option value="Funcionando">Funcionando</option>
                            <option value="Não Funcionando">Não Funcionando</option>
                            <option value="Não Verificado">Nao Verificado</option>
                        </select>
                        <input type="hidden" value="notebook" name="pagina">
                        <input id=botao type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/lineandbars.js"></script>

<script type="text/javascript" src="assets/js/dash-charts.js"></script>
<script type="text/javascript" src="assets/js/gauge.js"></script>

<!-- NOTY JAVASCRIPT -->
<script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topLeft.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topCenter.js"></script>

<!-- You can add more layouts if you want -->
<script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/js/admin.js"></script>

</body></html>
