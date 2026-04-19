<?php

$host = 'db'; // IMPORTANT: service name from docker-compose
$user = 'root';
$password = 'root';
$database = 'test_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "Connected successfully!";
