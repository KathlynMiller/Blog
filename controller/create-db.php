<?php
    require_once(__DIR__ . "/../model/config.php");

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
   
    