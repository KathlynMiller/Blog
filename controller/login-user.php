<?php
   require_once(__DIR__ . "/../model/config.php");

   $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

   $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

   if($query->num_rows == 1) { /* 1 row for query */
   	   $row = $query->fetch_array();

   	   if($row["password"] === crypt($password, $row["salt"])) {  /*authrnticated session need to be true to make the login successful*/
   	   	    $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
   	   }
   	   else {
   	   	     echo "<p>Invalid username and password</p>";
   	   }

   }
   else { 
   	  echo "<p>Invalid username and password</p>";
   }
