<?php
include "config.php";
// Step 2: Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Step 3: Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";


?>
