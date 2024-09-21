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
$Mode_of_payment = $_POST[ 'Mode_of_payment'];
$Phone_Number = $_POST['Phone_Number'];
$Amount=$_POST['Amount'];
$Card_Number = $_POST['Card_Number'];
$Expiry_date = $_POST['Expiry_date'];
$Card_Amount = $_POST['Card_Amount'];
$Security_Code = $_POST['Security_Code'];

//echo $name; die();
// Prepare and execute the SQL statement
/*$stmt = $conn->prepare("INSERT INTO users (name, email, password, UserType) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password, $UserType);
$stmt->execute();*/
$stmt=mysqli_query($conn,"insert into payment(Mode_of_payment,Phone_Number,Amount,Card_Number,Expiry_date,
Card_Amount,Security_Code) values
('$Mode_of_payment','$Phone_Number','$Amount','$Card_Number','$Expiry_date','$Card_Amount','$Security_Code')");

/*if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}*/
if ($stmt) {
    echo '<script>alert("BUS BOOKED SUCCEFULLY PLEASE CHECK YOUR MOBILE FOR SEATS DETAILS AND RECEIPT"); window.location.href = "http://localhost/bus/Local_User.php";</script>';
} else {
    echo "Something went wrong";
}


// Close the statement and the database connection
//$stmt->close();
$conn->close();
?>