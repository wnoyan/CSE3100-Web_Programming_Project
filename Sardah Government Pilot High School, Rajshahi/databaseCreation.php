<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

//Create database
$sql = "CREATE DATABASE registration";
mysqli_query($conn, $sql);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// sql to create table
$sql = "CREATE TABLE Students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>