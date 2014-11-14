<?php
//storing host, username, name of database, password
//setting visiblity to private, making so we have to be in the class to access
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	public function __construct($host, $username, $password, $database) {
		// taking the information that got passed in via the constructor, were assinging the information to the global variables.
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	// were creating our new object and we will be able to call on specfic functions 
	public function openConnection() {
		this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)
	}

	public function closeConnection(){

	}

	public function query($string){

	}
}