<?php
	//allows us to get info from config 
	require_once(__DIR__ . "/../model/config.php");

?>

<nav>
	<ul>
		<li>
			<!-- path comes from the require tag at the top of the page --> 
			<!-- path is what links all our project files -->
			<!-- the php code echos the path and a string -->
			<a href="<?php echo $path . "post.php" ?>">Blog Post Form</a> 
		</li>
	</ul>
</nav>