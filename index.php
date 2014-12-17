<?php
//view is probably where you'll get info from the model or have html code
//* note __DIR__ concatinates

// it has inserted code from header and putting it in index php
	require_once(__DIR__ . "/controller/logn-verify.php");
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser()) {

		
	require_once(__DIR__ . "/view/navigation.php");
	}
	require_once(__DIR__ . "/view/body.php");
	//require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/controller/read-posts.php");
	require_once(__DIR__ . "/view/footer.php");
	
?>
