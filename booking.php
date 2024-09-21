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

// Get form data
$ID = $_POST[ 'ID'];
$busname = $_POST['busname'];
$totalsits=$_POST['totalsits'];
$booking = $_POST['booking'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$fare = $_POST['fare'];


$stmt=mysqli_query($conn,"insert into bus_location(ID,busname,totalsits,booking,destination,
departure,arrival,fare) values
('$ID','$busname','$totalsits','$booking','$destination','$departure','$arrival','$fare')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Bus selected Successfull proceed to payment"); window.location.href = "http://localhost/bus/Client_page.php";</script>';
} else {
    echo "Something went wrong";
}


// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>