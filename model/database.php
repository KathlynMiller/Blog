<?php
class database { /* we need functions in our class that store in variables*/
	private $connection; /* these private variables are only to be access on this file*/
    private $host;   /* no other files can access this class*/
    private $username; /* these are member,instant,gobal variables*/
    private $password; /*a class is made with a new instance of an object that will be created and its name must be used when doing this*/
    private $database;

    public function __construct( $host, $username, $passoword, $database) { /* the constructor is cotaining 4 variable from the database class*/
      $this->host = $host;         /*they all are storing their own gobal variables*/
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;
    }

    public function openConnection() {  /*this function is for opening our connection */

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database); /*copied from create-db.php file and contains a connection with its mysqli with variables from database class*/

        if($this->connection->connect_error) {

           die("<p>Error: " . $this->connection->connect_error . "</p>");

        }
    }
    public function closeConnection() { /*this function is for closing our connection*/
    	if(isset($this->connection)) {       /*isset is checking the variable or it will turn null*/
    		$this->connection->close();    /*isset is checking $this->connection information*/

    	}

    }
    public function query($string) {   /*query function contains a string variable*/

    }
}