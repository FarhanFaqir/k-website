<?php
$host = 'localhost';
$user = 'u308973071_love5060';
$password = 'ASas1212@@';
$database = 'u308973071_love5060';

// Create a MySQL connection
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully.";
}

?>