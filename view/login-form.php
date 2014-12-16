<?php
 require_once(__DIR__ . "/../model/config.php"); /*added config.php file*/
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	 <div>
	 	<label for="usernanme">Username: </label> <!-- label tag for username -->
		<input type="text" name="username"/> <!-- input tag for text and username -->
	 </div>

	 <div>
	 	<label for="password">Password: </label> <!-- label tag for password -->
		<input type="password" name="password"/> <!-- input tag for password -->
	 </div>

	 <div>
	 	<button type="submit">Submit</button> <!-- button tag for submit button -->
	 </div>
</form>
