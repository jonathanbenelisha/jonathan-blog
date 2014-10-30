<?php
//the require_once statement is identical to require 
require_once(__DIR__ . "/../model/database.php");

//this connection variable takes my variables from my database 
//file and connects those files to my create_db file
$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
	die("Error: " . $connection->connect_error);
}
//this exists variable is allowing 
//me to selsect a specific database 
$exists = $connection->select_db($database);

if (!$exists) {
	$query = $connection->query("CREATE DATABASE $database");
// this if statement only echos out if the database is not being created
	if ($query) {
		echo "successfully created databse: " . $database;
	}
	
}
//only echos when we already have a database that exists 
else{
		echo "data base already exists";
	}

	//query creates a table it is important because
	// we need the table to exist that way we can put information in the database more
	// specifly within the table witch is housed in the database
	// this table is called post every post within the post needs to have an ID an title and a post text   
	$query = $connection->query("CREATE TABLE posts("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");
	if ($query) {
		echo "successfully created table: posts";
	}




$connection->close();

