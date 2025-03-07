<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data baza";

$connection = new mysqli
(hostname: $servername, username: $username, password: $password = "", database: $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
?>