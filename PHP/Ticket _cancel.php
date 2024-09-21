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
$Ticket_Number = $_POST[ 'Ticket_Number'];

//echo $name; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt=mysqli_query($conn,"insert into ticket_cancellation(Ticket_Number) values
($Ticket_Number)");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if($stmt)
{
  echo "regristration successful";
}else{
    echo "something went wrong"; 
}

// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>