<?php

$username = "root";
$password = "root";
$host = "localhost"; // 127.0.0.1
$database = "school";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

$sql = "CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result = $connection->query($sql);

if ($result === true) {
    echo "Table created successfuly!";
} else {
    echo "Table creation failed! " . $connection->error;
}
