<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <title>iNations Nation Sim</title>
    
    <meta name="description" content="iNations App">
    <meta name="author" content="Craig Peden">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
    	.margin_topup {
    		padding-top: 80px;
    	}
    </style>
</head>

<body>
	<header class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
        	<div class="container">
          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</a>
          		<a class="brand" href="<?php echo base_url();?>" style="height:20px; width:20px;"><img src="/img/globe_bw_40x40.png" height="18" width="18" /></a>
          		<a class="brand brand_logo" href="<?php echo base_url();?>">iNations</a>
          		<div class="nav-collapse">
            		<ul class="nav">
              			<li class="active"><a href="#">Home</a></li>
              			<li><a href="#about">About</a></li>
              			<li><a href="#contact">Contact</a></li>
            		</ul>
            		<?php if (isset($user)) { ?>
		       			<p class="navbar-text pull-right">Logged in as <a href="<?php echo site_url(); ?>/login/logout"><?php echo $user->username; ?></a></p>
            		<?php } ?>
            	</div> <!--/.nav-collapse -->
        	</div> <!--/.container -->
      	</div> <!-- /.navbar-inner -->
  	</header> <!-- /.navbar navbar-fixed-top -->
