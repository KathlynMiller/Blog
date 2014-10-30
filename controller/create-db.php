<?php
require_once(__DIR__ . "/../model/database.php");

   $connection = new mysqli($host, $username, $password);

   if($connection->connect_error) {

      die("Error: " . $connection->connect_error);

    }

    $exists = $connection->select_db($database);

   if(!$exists) {
   	 $query = $connection->query("CREATE DATABASE $database");

   	 if($query) {
        echo "successfully created database: " . $database;   
   	 }
   
   }

    else {
    	echo "Database already exists.";
    }

    $query = $connection->query("CREATE TABLE posts(") 
      . "id int(11) NOT NULL AUTO_INCREMENT";
   
   $connection->close();