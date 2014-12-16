<?php
    require_once(__DIR__ . "/../model/config.php"); 

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); /*title variable contains filter_input*/
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);  /*post variable contains filter_input*/
    $date = new DateTime('Today');
    $time = new Datetime('America/Los_Angeles');

    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'"); /*query variables equals connection making the query insert into posts and title variables*/


    if($query) {
        echo "<p> Succcessfully inserted post: $title</p>"; /* meaning if you inserted your post it went successfully*/
        echo "Posted on: " . $date->format("M/D" . " ". "d/y") . " at " . $time->format("G:1");
    }
    else {
	    echo "<p>" . $_SESSION["connection"]->error . "</p>"; /* the else is the error meaning your connection has an error with your inserted post*/
    }

    
