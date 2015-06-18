<!DOCTYPE HTML>

<html>

<head>

<title><?php echo $name; ?> - Dashboard</title>

<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

<script type="text/javascript">

	jQuery(document).ready(function($) {

		$(".scroll").click(function(event){		

			event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);

		});

	});

</script>

<link href="<?php echo base_url('assets/css/style.css') ?>" rel='stylesheet' type='text/css' />

<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

</script>

</head>

<body>

<div class="header">

  <div class="container">

    <div class="logo"> <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="GymWare"></a> </div>

    <div class="menu"> <a class="toggleMenu" href="#"><img src="<?php echo base_url('assets/images/nav_icon.png') ?>" alt="" /> </a>

      <ul class="nav" id="nav">

        <li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>

        <li><a href="<?php echo base_url('features'); ?>">Schedule</a></li>

        <li><a href="<?php echo base_url('pricing'); ?>">Account Info</a></li>

        <li><a href="<?php echo base_url('contact'); ?>">Profile</a></li>        

        <li><a href="<?php echo base_url('dashboard/logout'); ?>">Logout</a></li>

        <div class="clear"></div>

      </ul>

      <script type="text/javascript" src="<?php echo base_url('assets/js/responsive-nav.js') ?>"></script> 

    </div>

    <div class="clearfix"> </div>

  </div>

</div>