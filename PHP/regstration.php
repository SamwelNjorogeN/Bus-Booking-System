

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
$User_Type = $_POST[ 'User_Type'];
$First_Name = $_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$User_Name = $_POST['User_Name'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];

//echo $name; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt = mysqli_query($conn," insert into registration(User_Type,First_Name,Last_Name,User_Name,Email,
Phone_Number,Password,Confirm_Password)
 VALUES ('$User_Type', '$First_Name', '$Last_Name', '$User_Name', '$Email', '$Phone_Number', '$Password', '$Confirm_Password')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/login_form.php";</script>';
} else {
    echo "Something went wrong";
}
// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>