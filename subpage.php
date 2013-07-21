<?php
	$pageTitle = 'Subpage';	// The <title> for the current page
	$navCurrent = 'sub';	// Designates the active page in nav.php

	include('_includes/header.php')
?>

	<article class="clearfix">
	
		<h1 class="title-page"><?php echo $pageTitle; ?></h1>
		<p>This is a subpage.</p>
	
	</article>
	
<?php include('_includes/footer.php')?>