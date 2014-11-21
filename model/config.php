<?php

require_once(__DIR__ . "/Database.php");

session_start ();

//is the path to all our project files
	$path = "/blog/";

// this is where you store info
//* note you dont need a closing tag when there is only php
//you are storing database server information here
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if (!isset($_SESSION["connection"])) {
	
	//based of a class, query function
	$connection = new Database($host, $username, $password, $database);
	// we can access sesion variable throughout all web pages
	$_SESSION["connection"] = $connection;
}