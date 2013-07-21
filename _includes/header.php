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
	
	<title><?php echo $pageTitle; ?> | reStart Boilerplate</title>
	
	<!--[if ! lte IE 6]><!-->
		<link href="css/styles.css" rel="stylesheet" media="all">
	<!--<![endif]-->
	
	<!--[if lte IE 6]>
		<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen,projection">
	<![endif]-->
	
	<script src="js/libs/modernizr.js"></script>
    
</head>

<body class="<?php echo $navCurrent; ?>">

	<div class="wrapper-offcanvas">
		<nav id="nav-global" class="nav-global">
			<ul>
				<li class="<?php if ($navCurrent=='home') echo 'active'; ?>"><a href="index.php">Home</a></li>
				<li class="<?php if ($navCurrent=='sub') echo 'active'; ?>"><a href="subpage.php">Subpage</a></li>
			</ul>
		</nav>
	</div>
	
	<div class="wrapper-canvas">
	
		<header id="header-global" class="header-global">
			<nav id="nav-offcanvas" class="nav-offcanvas">
				<a class="toggle-offcanvas" href="#">Menu</a>
			</nav>
		</header>