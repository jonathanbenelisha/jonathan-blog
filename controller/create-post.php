<?php

	//require so we have access to variables in database.php
	// used info to create a new mysqli
	require_once(__DIR__ . "/../model/config.php");

	//filer_input it validates and sanitizes the inputs
	//post in the () means is info posting somewhere
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

	// this query is to insert things into our table
	//The INSERT INTO statement is used to insert new records in a table.
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");

	//this is to check if the query works or not
	if($query){
		echo "<p>Successfully inserted post: $title </p>";
		echo "Posted on:" . $date->format("M/D/Y") . "at" . $time->format("g:i");
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	