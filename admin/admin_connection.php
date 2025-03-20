<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "carshowroom";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "successful connection!";
?>