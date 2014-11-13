<?php
require_once(__DIR__ . "/../model/database.php");

   $connection = new mysqli($host, $username, $password, $database); /*putting in database code*/

   if($connection->connect_error) {

      die("<p>Error: " . $connection->connect_error . "</p>");

    }

    $exists = $connection->select_db($database); /* exists variable equals connection variable to select_db(database) */

   if(!$exists) {
   	 $query = $connection->query("CREATE DATABASE $database");

   	 if($query) {
        echo "<p>successfully created database: " . $database ."</p>";   
   	 }
   
   }

    else {
    	echo "<p>Database already exists.</p>"; /*paragraph tags in echo */
    }

    $query = $connection->query("CREATE TABLE posts(" /* creating table posts in query variable                                                                                                                      i*/
      . "id int(11) NOT NULL AUTO_INCREMENT," 
      . "title varchar(255) NOT NULL," 
      . "post text NOT NULL,"
      . "PRIMARY KEY (id))");

    if($query) {
      echo "Successfully created table: posts"; /* This echo only appears once in your php*/
    }
    else {
      echo "<p>$connection->error</p>";  /*paragraph tags in echo */
    }
   
   $connection->close(); /* you dont need the ?> tag at the end*/