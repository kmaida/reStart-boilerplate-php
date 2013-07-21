<?php
	$pageTitle = 'Home';	// The <title> for the current page
	$navCurrent = 'home';	// Designates the active page in the navigation (located in includes/header.php)

	require_once('_includes/header.php')
?>

	<article class="clearfix">
	
		<h1 class="title page"><?php echo $pageTitle; ?></h1>
		<p>This is the homepage.</p>
	
	</article>
	
<?php require_once('_includes/footer.php')?>