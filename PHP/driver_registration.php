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
$First_Name = $_POST[ 'First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name =$_POST['Last_Name'];
$National_ID = $_POST['National_ID'];
$Licence_Number = $_POST['Licence_Number'];
$Category = $_POST['Category'];
$image = $_POST['image'];

//echo $Bus_Condition; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt=mysqli_query($conn,"insert into driver_registration(First_Name,Middle_Name,Last_Name,
National_ID,Licence_Number,Category,image) values
('$First_Name','$Middle_Name','$Last_Name','$National_ID','$Licence_Number','$Category','$image')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/driver%20registration.php";</script>';
} else {
    echo "Something went wrong";
}

// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>