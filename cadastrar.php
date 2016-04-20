<?php

    session_start();

    if (!isset($_SESSION['email'])) {

        header("Location: index.php");
        exit();
    }
?>

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>DTICZando</title>
    <link rel="shortcut icon" href="assets/img/logo310.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/register.css">

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
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo30.png" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="home.php"><i class="icon-home icon-white"></i> Início</a></li>
                      <li class="active"><a href="cadastrar.php"><i class="icon-folder-open icon-white"></i> Cadastrar</a></li>
                      <li><a href="remover.php"><i class="icon-calendar icon-white"></i> Remover</a></li>
                      <li><a href="sobre.php"><i class="icon-th icon-white"></i> Sobre</a></li>
                      <li><a href="_DesAutenticacao.php"><i class="icon-lock icon-white"></i> Sair</a></li>


            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
        </div>


    <div class="container">

        <div class="col-lg-6">




        <!-- FIRST ROW OF BLOCKS -->


        		    <form id="register-form" class="form-control" method="post" action="_CadastrandoUsuario.php">

                            <label for="nome">Nome</label>
    		        		<input name="nome" class="input-huge" type="text">

    		        		<label for="sobrenome">Sobrenome</label>
    		        		<input name="sobrenome" class="input-huge" type="text">

        		        	<label>E-mail</label>
        		        	<input name="email" class="input-huge" type="text">

        		        	<label>Senha</label>
        		        	<input name="senha" class="input-huge" type="password">



        		            <button type="submit" class="btn btn-success">Cadastrar</button>




            </div>  </div>







    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>

  
</body></html>