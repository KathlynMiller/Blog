<?php 
   require_once(__DIR__ . "/../model/config.php");

   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

   $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$"; /* salt contains 5000 rounds */



   $hashedPassword = crypt($password, $salt); /*hashedPassword variable containing crypt with password and salt variable*/
   
   $query = $_SESSION["connection"]->query("INSERT INTO users SET " /* this query has a session thats inserting into users*/
   	 . "email = '$email',"
   	 . "username = '$username',"
   	 . "password = '$hashedPassword',"
   	 . "salt = '$salt'");

   if($query) {     /*made an if statement for query*/
   	echo "Successfully created user: $username";  /* you see this if it works*/
   }
   else {
   	    echo "<p>" . $_SESSION["connection"]->error . "</p>";

   }
   
 