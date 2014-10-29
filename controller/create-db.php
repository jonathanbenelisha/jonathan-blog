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
else{
		echo "successfully created databse: " . $database;
	}


$connection->close();

