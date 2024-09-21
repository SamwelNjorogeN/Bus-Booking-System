<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "s4n5kw8s";
$database = "bus_booking_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$User_Type = $_POST['User_Type'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$User_Name = $_POST['User_Name'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];

// Prepare and execute the SQL statement for registration
$stmtregistration = mysqli_prepare($conn, "INSERT INTO registration (User_Type, First_Name, Last_Name, User_Name, Email, Phone_Number, Password, Confirm_Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmtRegistration, "ssssssss", $User_Type, $First_Name, $Last_Name, $User_Name, $Email, $Phone_Number, $Password, $Confirm_Password);

if (mysqli_stmt_execute($stmtregistration)) {
    // Get the inserted user ID
    $user_id = mysqli_insert_id($conn);

    // Get form data for bus registration
    $ID = $_POST['ID'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Bus_Name= $_POST['Bus_Name'];
    $totalsits = $_POST['totalsits'];
    $booking = $_POST['booking'];
    $destination = $_POST['destination'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $fare = $_POST['fare'];

    // Prepare and execute the SQL statement for bus registration
    $stmtbus_location = mysqli_prepare($conn, "INSERT INTO bus_location (ID, First_Name, Last_Name, Bus_Name, totalsits, 
    booking, destination, departure, arrival, fare) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmtbus_location, "issssssssssss", $ID, $First_Name, $Last_Name, $Bus_Name, $totalsits, 
    $booking, $destination, $departure,$arrival, $fare);

    if (mysqli_stmt_execute($stmtbus_location)) {
        echo '<script>alert("Registered successfully!"); window.location.href = "http://localhost/bus/login_form.php";</script>';
    } else {
        echo "Something went wrong";
    }

    mysqli_stmt_close($stmtbus_location);
} else {
    echo "Something went wrong";
}

// Close the statement and the database connection
mysqli_stmt_close($stmtRegistration);
$conn->close();
?>
