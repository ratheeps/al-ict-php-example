<?php

$username = "root";
$password = "root";
$host = "localhost"; // 127.0.0.1
$database = "school";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

$firstname = "Raja";
$lastname = "Kamal";
$email = "email@example.com";

$sql = "INSERT INTO students (firstname,lastname,email) VALUE ('$firstname', '$lastname', '$email')";

$result = $connection->query($sql);

if ($result === true) {
    $createdId = $connection->insert_id;
    echo "Record is created with id : $createdId";
} else {
    echo "Creation failed" . $connection->error;
}
