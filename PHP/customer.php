<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bus_booking_system";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$passport = $_POST[ 'passport'];
$First_Name = $_POST['First_Name'];
$Middle_Name = $_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$gender = $_POST['gender'];
$Contact=$_POST['Contact'];
$DOB = $_POST['DOB'];
$place= $_POST['place'];
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$LastName=$_POST['LastName'];
$relation = $_POST['relation'];
$Emergency = $_POST['Emergency'];

$stmt = mysqli_query($conn," insert into customerdetails(passport,First_Name, Middle_Name, Last_Name,gender,
Contact,DOB,place,FirstName, MiddleName, LastName,relation,Emergency)
 VALUES ('$passport', '$First_Name', '$Middle_Name', '$Last_Name', '$gender','$Contact', 
 '$DOB', '$place', '$FirstName', '$MiddleName', '$LastName', '$relation', '$Emergency')");

$stmt = true; 

if ($stmt) {
    echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/payment.php";</script>';
} else {
    echo "Something went wrong";
}



$conn->close();
?>