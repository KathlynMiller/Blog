<?php
    require_once(__DIR__ . "/../model/config.php"); 

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); /*title variable contains filter_input*/
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);  /*post variable contains filter_input*/

    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); /*query variables equals connection making the query insert into posts and title variables*/

    if($query) {
        echo "<p> Succcessfully inserted post: $title/p>" /* meaning if you inserted your post it went successfully*/
    }
    else {
	    echo "<p>connection->error</p>"; /* the else is the errormeanign your connection has an error with your inserted post*/
    }

    $connection->close(); /*closes the connection*/
