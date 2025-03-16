<?php
// ==================1==================
// Define variables to connect to the database

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
// Define $conn to connect to the database
// Database Connection
$servername = "localhost";  // Change if using a different server
$username = "root";         // Change if using a different username
$password = "";             // Change if using a password
$database = "library_db";   // Change if using a different database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
