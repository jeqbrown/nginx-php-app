<?php
// Database connection parameters
$host = 'mysql-db';   // MySQL server hostname within the same Docker network
$user = 'db_user';    // MySQL username
$pass = 'password';   // MySQL password
$db = 'test_database';// MySQL database name

// Create a new MySQLi object to establish a database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    // Display an error message and terminate the script if the connection fails
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, print a success message
echo "PHP Connected to MySQL successfully";

// Close the database connection
$conn->close();