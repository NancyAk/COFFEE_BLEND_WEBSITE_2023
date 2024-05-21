<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "coffee";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
