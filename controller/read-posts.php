<?php
   require_once(__DIR__ . "/../model/config.php"); /*config.php file added*/

   $query = "SELECT * FROM posts"; /*query variable is selected from posts*/
   $result = $_SESSION["connection"]->query($query); /*result variable has a session*/

   if($result) {
   	 while($row = mysqli_fetch_array($result)) {/* for result variable*/ /* echoing needed html tags in result c*/
         echo "<div class='post'>";     /*echoing div class to post*variable in an if statement*/
         echo "<h2>" . $row['title'] . "</h2>";
         echo "<br />";
         echo "<p>" . $row['post'] . "</p>";
         echo "</div>";
      }
  	}

   

