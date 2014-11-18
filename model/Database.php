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

	public function __construct($host, $username, $password, $database) {
		//__construct() is the method name for the constructor. The constructor is called on an object after it has been created
		// taking the information that got passed in via the constructor, were assinging the information to the global variables.
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	// were creating our new object and we will be able to call on specfic functions 
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)
	if($this->connection->connect_error){

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

		$this->closeConnection();
		
		return $query;
	}
}