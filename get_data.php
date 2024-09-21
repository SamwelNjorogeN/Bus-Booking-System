<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "bus_booking_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'customerdetails' table
$result = mysqli_query($conn, "SELECT * FROM customerdetails");

// Prepare an array to store the data
$data = array();

// Loop through the result set and add each row to the data array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the database connection
$conn->close();

// Send the data as JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
