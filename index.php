<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
<div id="div1">
	Blog Post 
</div>
<article>
	<p>Bacon ipsum dolor amet turkey t-bone bresaola biltong doner. Tenderloin rump tongue fatback beef andouille prosciutto alcatra boudin capicola beef ribs picanha turkey. Pork belly strip steak tri-tip hamburger, jowl meatloaf flank pig rump short ribs leberkas ham landjaeger ham hock. Tongue cow shank, kevin doner bacon alcatra shankle pork belly cupim ground round drumstick. </p>Frankfurter biltong shank ham hock ground round. Prosciutto venison frankfurter, drumstick short loin flank corned beef tongue chicken capicola pastrami kevin. Pork belly corned beef turkey, meatball chuck picanha ham hock brisket filet mignon alcatra.

Pork belly andouille bacon turducken, sirloin biltong chicken short loin jerky alcatra corned beef venison. Shankle pig tenderloin spare ribs bresaola salami venison landjaeger, porchetta tongue sirloin hamburger ham. Leberkas jerky short ribs, cupim chicken turkey salami ribeye pork loin pork chop biltong. Pig strip steak fatback, kielbasa turkey shankle short loin alcatra pork chop porchetta drumstick picanha shoulder. Bresaola leberkas pork belly sirloin, pastrami ribeye biltong beef short loin andouille.
</article>

<script>$('article').readmore();</script>
<div>
	


<?php
//view is probably where you'll get info from the model or have html code
//* note __DIR__ concatinates

// it has inserted code from header and putting it in index php
	require_once(__DIR__ . "/view/header.php");
//it has inserted code from footer and putting it in index php
	require_once(__DIR__ . "/view/footer.php");
//this allows the link to show up
	require_once(__DIR__ . "/view/navigation.php");
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/controller/read-posts.php")
?>
</div>
</body>
</html>

<!-- separating everything helps make it easier to maintain our code-->