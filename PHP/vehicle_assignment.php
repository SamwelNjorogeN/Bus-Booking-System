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
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$ID_Number= $_POST['ID_Number'];
$Car_Number = $_POST['Car_Number'];
$Number_of_sits = $_POST['Number_of_sits'];

//echo $name; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt=mysqli_query($conn,"insert into driver_assign(First_Name,Middle_Name,Last_Name,ID_Number,Car_Number,Number_of_sits
) values
('$First_Name', '$Middle_Name', '$Last_Name', '$ID_Number', '$Car_Number', '$Number_of_sits')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/vehicle_assignment.php";</script>';
} else {
    echo "Something went wrong";
}

// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>