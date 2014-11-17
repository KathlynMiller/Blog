<?php
class database { /* we need functions in our class that store in variables*/
	private $connection; /* these private variables are only to be access on this file*/
    private $host;   /* no other files can access this class*/
    private $username; /* these are member,instant,gobal variables*/
    private $password; /*a class is made with a new instance of an object that will be created and its name must be used when doing this*/
    private $database;

    public function __construct( $host, $username, $passoword, $database) {
      $this->host = $host;
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;
    }

}