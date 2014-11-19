<?php
//storing host, username, name of database, password
//setting visiblity to private, making so we have to be in the class to access

// we are using classes so the code is easy to read also so that we can use
// also so we can use the objects we store in the class anywhere else 
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	public $error;

	public function __construct($host, $username, $password, $database) {
		//__construct() is the method name for the constructor. The constructor is called on an object after it has been created
		// taking the information that got passed in via the constructor, were assinging the information to the global variables.
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		//in this connection variable, theres class or object that accesses info on our mysqli server
		$this->connection = new mysqli($host, $username, $password);

		//this is where we check if theres a connection error
		if($this->connection->connect_error){

		//there is an error and were killing the program& were echoing whats wrong with it
		die("<p>error: " . $this->connection->connect_error . "</p>");
	}

		//this is gonna access the database
		$exists = $this->connection->select_db($database);

		//*note the ! means its false
		// this is creating a database if it doesnt exist& running a query& there is sql language in the ()
		if(!$exists){
		$query = $this->connection->query("CREATE DATABASE $database");

		//this is outputting a message
		if($query){
	echo "<p>successfully executed DATABASE:" . $database . "</p>";
		}
	}

		//if this runs this means a database already exists
		else{
				echo "<p>Database already exists</p>";
	}

}

	// were creating our new object and we will be able to call on specfic functions 
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
	if ($this->connection->connect_error){

//there is an error and were killing the program& were echoing whats wrong with it
	die("<p>error: " . $connection->connect_error . "</p>");
		}

	}

	public function closeConnection(){
		if (isset($this->connection)) {
			$this->connection->close();
		}
	}

	public function query($string){
		$this->openConnection();

		$query = $this->connection->query($string);

		if (!$query) {
			$this->error = $this->connection->error;
		}

		$this->closeConnection();

		return $query;
	}
}