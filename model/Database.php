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
}