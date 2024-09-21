<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bus_booking_system";


    $conn = new mysqli($servername, $username, $password, $database);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $bid = $_GET['bid'];
    $fetch_booking=mysqli_query($conn,"SELECT * FROM bus_registration WHERE id='$bid'");
    $booking_details=mysqli_fetch_array($fetch_booking);

    session_start();

    $First_Name = $_SESSION['admindets']['First_Name'];
    $Last_Name = $_SESSION['admindets']['Last_Name'];
    $Bus_Name= $booking_details['Bus_Name'];
    $totalsits = $booking_details['Number_of_sits'];
    $booking = $booking_details['booking'];
    $destination = $booking_details['destination'];
    $departure = $booking_details['departure'];
    $arrival = $booking_details['arrival'];
    $fare = $booking_details['fare'];


    $stmt = mysqli_query($conn, "insert into bus_location(First_Name, Last_Name, Bus_Name, totalsits, 
    booking, destination, departure, arrival, fare) values 
    ('$First_Name', '$Last_Name', '$Bus_Name', '$totalsits', '$booking', '$destination', '$departure','$arrival', '$fare')");
    
    if ($stmt) {
        echo '<script>alert("Registration successful!"); window.location.href = "http://localhost/bus/payment.php";</script>';
    } else {
        echo "Something went wrong";
    }
?>