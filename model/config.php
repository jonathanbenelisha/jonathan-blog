<?php

require_once(__DIR__ . "/database.php");

//is the path to all our project files
	$path = "/blog/";

// this is where you store info
//* note you dont need a closing tag when there is only php
//you are storing database server information here
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

//based of a class, query function
$connection = new Database($host, $username, $password, $database);