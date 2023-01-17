<?php 
/**
 * Database Connection Configuration
 * This file is used to establish a connection to the database.
 * It contains the host, username, password, and database name used to connect to the database.
 * It also checks if the connection is successful and displays an error message if the connection fails.
 */
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'listing';
// Connect to the database
$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}