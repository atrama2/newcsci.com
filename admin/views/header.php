<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'Admin'; ?></title>
    <meta charset="utf-8">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
    <!-- jqueryui CSS -->     
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Bootstrap Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<?php
    if (isset($this->css)) 
    {
        foreach ($this->css as $css)
        {
            echo '<script type="text/javascript" src="'. URL . $css .'"></script>';
        }
    }
    ?>
	
	<!-- jquery 1.11.2 -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- jqueryui 1.11.2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- custom javascript -->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <!-- call private javascript -->
    <?php
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'. URL . $js .'"></script>';
        }
    }
    ?>
    
</head>
<body>
<div class="container">

<?php Session::init(); ?>

<!-- Static navbar -->              
<?php if (Session::get('loggedIn') == true):?>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		
			<div class="navbar-header">
		    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		       		<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="<?php echo URL;?>index">Admin</a>
		    </div>
		    
		    <div id="navbar" class="navbar-collapse collapse">
		    	<ul class="nav navbar-nav">
			    	<li><a href="<?php echo URL; ?>index">Index</a></li>
			    	<li><a href="<?php echo URL; ?>banner">Banner</a></li>
			        <li><a href="<?php echo URL; ?>content">Content</a></li>
			        <li><a href="<?php echo URL; ?>help">Help</a></li>
			        <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
			        <li><a href="<?php echo URL; ?>note">Notes</a></li>
		        	<?php if (Session::get('role') == 'owner'):?>
		        	<li><a href="<?php echo URL; ?>user">Users</a></li>
		        	<?php endif; ?>
		        	<li><a href="<?php echo URL; ?>dashboard/logout">Logout</a> </li>   
		    		<?php else: ?>
		    		<?php endif; ?>
<?php if (Session::get('loggedIn') == true):?>
            	</ul>
          	</div><!--/.nav-collapse -->
    	</div><!--/.container-fluid -->
	</nav>
<?php endif; ?>
    
    
    
    