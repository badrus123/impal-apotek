<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url().'assets/img/title.png' ?>"/>
	<title>Gabut</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/home.css ' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/demo.css' ?> ">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/icon/font/css/open-iconic-bootstrap.css' ?>">
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/form-register.css' ?>">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	
  	
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/s/creative.min.css' ?>" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url().'assets/a/js/d3.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/getmdl-select.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/material.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/nv.d3.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/employer-form/employer-form.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/line-chart/line-chart-nvd3.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/map/maps.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/pie-chart/pie-chart-nvd3.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/table/table.js' ?>"></script>
	<script src="<?php echo base_url().'assets/a/js/widgets/todo/todo.js' ?>"></script>


	<link rel="stylesheet" href="<?php 	echo base_url().'assets/css/apli.css' ?>">

</head>
<body>
	    <!-- Login and Register -->
	            <nav class="navbar navbar-header navbar-expand-sm">
	            	<a class="navbar-brand mr-3" href="<?php echo base_url('Home'); ?>" >
	            		<img class="logo" src="<?php echo base_url().'assets/img/logo.png' ?>">
	            	</a>	
				<!-- Searching -->
					<form class="form-inline w-75 justify-content-center">
						<input type="search" name="search" class="form-control 	" placeholder="Cari di Gabut"> 
			            <button type="submit" class="btn nav-search-btn" >
			            	<span class="oi oi-magnifying-glass" data-glyph="oi oi-magnifying-glass" title="magnifying glass" aria-hidden="true"></span>
			            </button>
					</form>

	            	<ul class="navbar-nav ">
		 			 	<!-- Dropdown -->
		 			 	<li class="nav-item dropdown">
		 			     <a class="nav-link dropdown-toggle a" href="#" id="navbardrop" data-toggle="dropdown">
		 			       Tipe
		 			     </a>
		     			 <div class="dropdown-menu">
		 			       	<a class="dropdown-item a" href="<?php echo base_url('Home'); ?>">Event</a>
					        <a class="dropdown-item a" href="<?php echo base_url('Home'); ?>">Seminar</a>
					        <a class="dropdown-item a" href="<?php echo base_url('Home'); ?>">Kompetisi</a>
		 			     </div>
					    </li>
					    <!-- Links -->
		 			   <li class="nav-item">
		 			     <a class="nav-link a" href="<?php echo base_url('Create_event'); ?>">Create Event</a>
		 			   </li>
		 		  	</ul>
		 	<div class="mdl-layout__header-row">
				<div class="btn-group">
				<div class="btn" id="icon">
					<span class="a"><?php echo $this->session->userdata('username'); ?></span>
				</div>
				<!-- Account dropdawn-->
				<ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown" for="icon">
					<li class="mdl-list__item mdl-list__item--two-line">
						<span class="mdl-list__item-primary-content">
							<span class="material-icons mdl-list__item-avatar"></span>
							<span><?php echo $this->session->userdata('nama'); ?></span>
							<span class="mdl-list__item-sub-title"><?php echo $this->session->userdata('email'); ?></span>
						</span>
					</li>
					<li class="list__item--border-top"></li>
					<li class="mdl-menu__item mdl-list__item">
						<a href="<?php echo base_url('Profil/index');?>">
						<span class="mdl-list__item-primary-content">
						 Profil
						</span>
						</a>
					</li>
					<li class="mdl-menu__item mdl-list__item">
					<a href="<?php echo base_url('My_event/index');?>">
						<span class="mdl-list__item-primary-content">
							My Event
						</span>
						</a>
					</li>
					<li class="mdl-menu__item mdl-list__item">
					<a href="<?php echo base_url('Help/index');?>">
						<span class="mdl-list__item-primary-content">
							Help
						</span>
						</a>
					</li>
					<li class="list__item--border-top"></li>
					<li class="mdl-menu__item mdl-list__item">
					<a href="<?php echo base_url('Help/setting');?>">
						<span class="mdl-list__item-primary-content">
							Settings
						</span>
						</a>
					</li>
					<li class="mdl-menu__item mdl-list__item">
					<a href="<?php echo base_url('Users_C/logout'); ?>">
						<span class="mdl-list__item-primary-content">
							Log out
						</span>
						</a>
					</li>
				</ul>
			</div>
	            </nav> 


	