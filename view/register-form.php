<?php
 require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1> <!--Register heading for Login-->

 <form method="post" action="<?php echo $path . "controller/create-user.php"; ?>"> <!--added a method -->
	<div>
		<label for="email">Email: </label> <!-- label tag for email -->
		<input type="text" name="email"/>  <!-- input tag for text and email -->
	</div>

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