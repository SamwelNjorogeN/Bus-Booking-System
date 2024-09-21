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

// Check if the request contains the necessary parameters
if (isset($_POST['bookingStation']) && isset($_POST['destinationStation'])) {
    $bookingStation = $_POST['bookingStation'];
    $destinationStation = $_POST['destinationStation'];

    // Fetch bus data from the database based on the selected stations
    $query = "SELECT * FROM bus_registration WHERE booking = '$bookingStation' AND destination = '$destinationStation'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Create an array to store the bus data
        $busData = array();

        // Fetch rows from the result and add them to the bus data array
        while ($row = $result->fetch_assoc()) {
            $busData[] = $row;
        }

        // Return the bus data as a JSON response
        echo json_encode($busData);
    } else {
        // No bus data found for the selected stations
        echo json_encode(array());
    }
}

// Close the database connection
$conn->close();
?>
