<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

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

  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  	
  	<!-- ElFinder File Manager CSS. https://github.com/Studio-42/elFinder/ -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/smoothness/jquery-ui.css">
  	<link rel="stylesheet" type="text/css" media="screen" href="assets/manager/css/elfinder.min.css">
	<script type="text/javascript" src="assets/manager/js/elfinder.min.js"></script>	
  	
  	<!-- elFinder web manager init -->
	<script type="text/javascript" charset="utf-8">
		$().ready(function() {
			var elf = $('#elfinder').elfinder({
				// lang: 'ru',             // language (OPTIONAL)
				url : 'assets/manager/php/connector.php'  // connector URL (REQUIRED)
			}).elfinder('instance');			
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
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo30.png" alt=""> BLOCKS Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>
              <li class="active"><a href="manager.html"><i class="icon-folder-open icon-white"></i> File Manager</a></li>
              <li><a href="calendar.html"><i class="icon-calendar icon-white"></i> Calendar</a></li>
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

	<div class="container">

      <!-- CONTENT -->
		<div class="row">

      		<!-- File Manager -->
        	<div class="col-sm-12 col-lg-12">
				<div id="elfinder">finder</div>
				<div class="row" style="margin:auto">
				<br>
				<br>
				<div class="dash-unit">
					<h5>elFinder Web Manager</h5>
						<p>elFinder is an open-source file manager for web, written in JavaScript using
						jQuery UI. As you can see its creation is inspired by simplicity and convenience
						of Finder program used in Mac OS X operating system. 
						</p>
					<h5>Support</h5>
					<p>* Homepage - http://elfinder.org</p>
					<p>* Wiki - https://github.com/Studio-42/elFinder/wiki</p>
					</div>
				</div>
			</div><!-- /span9 -->
	      </div><!-- /row -->
	   </div> <!-- /container -->
     
    <!-- Footer -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="assets/img/logo.png" alt=""></p>
      			<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/admin.js"></script>
    

  
</body></html>