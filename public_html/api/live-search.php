<?php

//Include our secure variables 
include('../../config.inc.php');

// Connect to our database
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


// Set sort 

$SortBy = $_GET['sort'];

// fitler the search query 

$searchQuery = $dbc->real_escape_string($_GET['query']);	


$sql = "SELECT first_name,last_name,email_address,phone
		FROM customers
		WHERE CONCAT(first_name,' ',last_name)
		LIKE '%$searchQuery%' 
		ORDER BY $SortBy ASC
		LIMIT 5";

// Rub the query 
$result = $dbc->query($sql);


// fetch all the data 

$allData = $result->fetch_all();


//Convert result into JSON 

$allData = json_encode($allData);

// tell the js it is about to recieve the json

header('Content-type: application/json');


echo $allData;