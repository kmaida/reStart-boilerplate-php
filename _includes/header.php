<!DOCTYPE html>
<!--[if IE 7]><html lang="en" class="ie7 oldIE ie"><![endif]-->
<!--[if IE 8]><html lang="en" class="ie8 oldIE ie"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9 ie"><![endif]-->
<!--[if gt IE 9|!IE]><!--><html lang="en"><!-- <![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">
	
	<title><?php echo $pageTitle; ?> | reStart</title>
	<link href="css/styles.css" rel="stylesheet" media="all">
	<script src="js/libs/modernizr.js"></script> <!-- http://modernizr.com / https://github.com/Modernizr/Modernizr -->
</head>

<body class="<?php echo $navCurrent; ?>">
	<div class="wrapper-overflow">

		<div class="wrapper-canvas">
	
			<header id="header-global" class="header-global clearfix">
				<a class="toggle-offcanvas" href="#">Menu</a>
				
				<h1 class="title-global">reStart Boilerplate</h1>
				
				<nav id="nav-global" class="nav-global" role="navigation">
					<ul>
						<li class="<?php if ($navCurrent=='home') echo 'active'; ?>"><a href="index.php">Home</a></li>
						<li class="<?php if ($navCurrent=='sub') echo 'active'; ?>"><a href="subpage.php">Subpage</a></li>
					</ul>
				</nav>
			</header>