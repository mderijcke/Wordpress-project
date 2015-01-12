<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
	<div id="wrapper">
		<!--header-->
		<header>
			<!--Header-Text
			<p id="header-text"><i>Internationaal project</i></p>
			<span id="header-image"></span>
			-->
			<img src="<?php header_image(); ?>" alt="Header-Image" />
		</header>
		<!--nav-->
		<nav>
			<?php wp_nav_menu( 'sort_column=menu_order&container_id=menu' ); ?>
			<!--
			<ul class="menu">
	  			<li><a href="/home" class="active"><span>Home</span></a></li>
	 			<li><a href="/services"><span>Projectinfo</span></a></li>
	  			<li><a href="/about"><span>Partners</span></a></li>
	  			<li><a href="/contact"><span>Activiteiten</span></a></li>
	  			<li><a href="/contact"><span>Sharing</span></a></li>
	  			<li><a href="/contact"><span>Contact</span></a></li>
			</ul>
			-->
		</nav>
