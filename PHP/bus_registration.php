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
$Bus_Name = $_POST[ 'Bus_Name'];
$Number_Plate = $_POST['Number_Plate'];
$Number_of_sits =$_POST['Number_of_sits'];
$Bus_Type = $_POST['Bus_Type'];
$Log_Book = $_POST['Log_Book'];
$Bus_Condition = $_POST['Bus_Condition'];
$Bus_Ownership = $_POST['Bus_Ownership'];
$booking = $_POST['booking'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$fare = $_POST['fare'];

//echo $Bus_Condition; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt=mysqli_query($conn,"insert into bus_registration(Bus_Name,Number_Plate,Number_of_sits,
Bus_Type,Log_Book,Bus_Condition,Bus_Ownership,booking,destination,departure,arrival,fare) values
('$Bus_Name','$Number_Plate','$Number_of_sits','$Bus_Type','$Log_Book','$Bus_Condition',
'$Bus_Ownership','$booking','$destination','$departure','$arrival','$fare')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/bus%20registration.php";</script>';
} else {
    echo "Something went wrong";
}
// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>