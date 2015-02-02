<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



$db_selected = mysql_select_db('renting', $link);
if (!$db_selected) {
    die ('Can\'t use renting : ' . mysql_error());
}




?>