<?php

$username = "root";
$password = "root";
$host = "127.0.0.1"; // localhost

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE school";

$results = $connection->query($sql);
if ($results === true){
    echo "Database created";
}else{
    echo "Database creation failed: " . $connection->error;
}

$connection->close();
