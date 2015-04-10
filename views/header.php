<?php Session::init();?>
<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'Admin'; ?></title>
    <meta charset="utf-8">
    
    <!-- jqueryui CSS -->     
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Bootstrap Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link href=
    "//fonts.googleapis.com/css?family=Roboto:700,500,400,300,100&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext"
    rel="stylesheet">
    <link href=
    "//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,200,100&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext"
    rel="stylesheet">
	
    
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="home" title="CSC IT Unlimit">
            	<img style="max-width:100px; margin-top: -5px;" src="/public/images/csc-logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            	<li <?php if(isset($this->active) && $this->active == 'home'){echo 'class="active"';}?>><a href="<?php echo URL; ?>home">HOME</a></li>
			    <li <?php if(isset($this->active) && $this->active == 'help'){echo 'class="active"';}?>><a href="<?php echo URL; ?>help">HELP</a></li>
			    <li <?php if(isset($this->active) && $this->active == 'content'){echo 'class="active"';}?>><a href="<?php echo URL; ?>content">CONTENT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/contact" title="wisebook"><strong>wisebook</strong></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>