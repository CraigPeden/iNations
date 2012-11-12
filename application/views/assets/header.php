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
    <link href="../../iNations/css/iNations.css" rel="stylesheet">
    <link href="../../iNations/css/bootstrap.css" rel="stylesheet">
    <style>
    	body {
    		padding-top: 40px;
    	}
    </style>
    <link href="../../iNations/css/bootstrap-responsive.css" rel="stylesheet">
    
</head>

<body>
	<?php /*
		$sql = "UPDATE `iNations`.`nation_info` SET `nation_collected_taxes` = '0' WHERE `nation_info`.`nation_collected_taxes` = '1' LIMIT 10";
$rs = mysql_query($sql);
$sql = "UPDATE `iNations`.`nation_info` SET `nation_paid_bills` = '0' WHERE `nation_info`.`nation_paid_bills` = '1' LIMIT 10";
$rs = mysql_query($sql);
$sql = "UPDATE `iNations`.`nation_info` SET `nation_developed_nuclear_weapon` = '0' WHERE `nation_info`.`nation_developed_nuclear_weapon` = '1' LIMIT 10";
$rs = mysql_query($sql);*/
	?>
	<header class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
        	<div class="container">
          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</a>
          		<a class="brand" href="<?php echo base_url();?>" style="height:20px; width:20px;"><img class="brand_img" src="../../iNations/img/globe_bw_40x40.png" height="18" width="18" /></a>
          		<a class="brand brand_logo" href="<?php echo base_url();?>">iNations</a>
          		<div class="nav-collapse">
            		<ul class="nav">
                        <li <?php if (uri_string() == "") {echo 'class="active"';} ?>><a href="<?php echo site_url(''); ?>"><i class="icon-home icon"></i> Home</a></li>
                        <li <?php if (uri_string() == "iNations/about") {echo 'class="active"';} ?>><a href="<?php echo site_url('iNations/about'); ?>"><i class="icon-inbox icon"></i> About</a></li>
                        <li <?php if (uri_string() == "iNations/changelog") {echo 'class="active"';} ?>><a href="#<?php //echo site_url('iNations/changelog'); ?>"><i class="icon-file icon"></i> Changelog</a></li>
                        <li <?php if (uri_string() == "iNations/contact") {echo 'class="active"';} ?>><a href="#<?php //echo site_url('iNations/contact'); ?>"><i class="icon-envelope icon"></i> Contact</a></li>
            		</ul>
            		<?php if (isset($user)) { ?>
		       			<p class="navbar-text pull-right">Logged in as <a href="<?php echo base_url('Login/logout'); ?>"><?php echo $user->username; ?></a></p>
            		<?php } ?>
            	</div> <!--/.nav-collapse -->
        	</div> <!--/.container -->
      	</div> <!-- /.navbar-inner -->      	
  	</header> <!-- /.navbar navbar-fixed-top -->
