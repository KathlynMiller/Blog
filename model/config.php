<?php
 
  $path="/blog/"; /* path variable  contains blog folder*/

  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "blog_db";

  $connection = new database($host, $username, $password, $database);  /* connection variable equals new mysqli containing $host, $username, $passowrd, $database variables */
