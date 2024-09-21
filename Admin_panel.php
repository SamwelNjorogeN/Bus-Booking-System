<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        $extra="../login_form.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="Admin_panel.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">

    <style>
        .nav {
            width: 15pc;
            height: 39.89rem;
            background: grey;
        }

        #backvideo video {
            pointer-events: none;
            display: flex;
            position: relative;
            width: 82.19%;
            margin-left: 17.8%;
            margin-top: -39.9em;
        }
    </style>

</head>

<body>
    <from>
        <div class="container">
            <div class="cont">
                <div class="bus">
                    <div class="add">
                        <a link href="Bus Registration.php"> <button style="margin-top: 15%;">ADD BUS AND
                                DESTINATION</button></a>
                    </div>
                    <div class="driver">
                        <a link href="Driver Registration.php"> <button>ADD DRIVER</button></a>
                    </div>
                    <div class="local">
                        <a link href="Local_User_registration.php"> <button>ADD LOCAL USER</button></a>
                    </div>
                    <div class="out">
                        <a href="PHP/logout.php"><button name="logout">SIGN OUT</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Admin">
            <div class="nav">
                <a href="location.php"> <button id="but">SHOW ALL </button></a>
                <a href="vehicle_assignment.php"><button name="ASSIGN DRIVER">ASSIGN DRIVER</button></a>
                <a href="passengerinfo.php"><button name="TOTAL PASSENGER">PASSENGER LIST</button></a>
                <a href="user.php"> <button name="systemUser">SYSTEM USER</button> </a>
                <a href="localadmin.php"> <button name="User">LOCAL AND ADMIN</button> </a>
                <a href="customerinfo.php"><button name="CUSTOMER INFO">CUSTOMER INFO</button></a>
                <a href="DriverList.php"><button name="DRIVER LIST">DRIVER LIST</button></a>
            </div>
        </div>
    </from>
    <div id="backvideo">
        <video autoplay muted loop width="100%">
            <source src="YUTONG Used Bus.mp4" type="video/mp4">
        </video>
    </div>
</body>

</html>