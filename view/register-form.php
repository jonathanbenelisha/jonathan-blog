<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>

	register
</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<div>
	<label for="Email"> Email: </label>
	<input type="text" name="email" />
</div>
	<label for="username">Username: </label>
	<input type="text" name="username" />
<div>
	<label for="Password">Passwword: </label>
	<input type="password" name="password" />
</div>

<div>
	<button type="submit">Submit</button>
</div>
</form>