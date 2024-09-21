<?php
define("db_server", "localhost");
define("bus_registration", "root");
define("db_password", "");
define("db_name", "bus_booking_system");


$conn=mysqli_connect(db_server, bus_registration, db_password, db_name);
//connecting to database

if(mysqli_connect_errno()){
    echo "Failed to connect:", mysqli_connect_errno();
}

?>