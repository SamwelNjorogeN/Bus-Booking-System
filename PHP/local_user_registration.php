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
$ID_Passport_Number = $_POST['ID_Passport_Number'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$UserName = $_POST['UserName'];
$Phone_Number = $_POST['Phone_Number'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$User_Type = $_POST['User_Type'];

//echo $Bus_Condition; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt = mysqli_query($conn, "insert into local_registration(ID_Passport_Number,First_Name,Last_Name,UserName,
Phone_Number,password,confirm,User_Type) values
('$ID_Passport_Number','$First_Name','$Last_Name','$UserName','$Phone_Number','$password','$confirm','$User_Type')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/Local_user_registration.php";</script>';
} else {
    echo "Something went wrong";
}


// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>