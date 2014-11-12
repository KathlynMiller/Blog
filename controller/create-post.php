<?php
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $passowrd, $database);


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); /*title variable contains filter_input*/
  $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);  /*post variable contains filter_input*/

   echo "<p>Title: $title</p>" /*echoing paragraph tag with Title:*/
    echo "<p>Post: $post</p>" /*echoing paragraph tag with Post:*/

    $connection->close();
