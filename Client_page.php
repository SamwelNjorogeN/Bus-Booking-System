<!DOCTYPE html>
<html>

<head>
    <title>Rocky Client</title>
    <link rel="stylesheet" href="Client_page.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
    <style>
        #book {
            width: 100%;
            border-radius: none;
        }

        .alt2 {
            position: relative;
            margin-top: 7em;
            margin-left: 28%;
        }

        body {
            background: #a18cd1;
        }

        button[id="but"] {
            width: 70%;
            border-radius: 3%;
            font-size: 20px;
            font-weight: bolder;
        }

        table {
            position: absolute;
            margin-left: 15%;
            border-collapse: collapse;
            width: 80%;
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
        }

        #backvideo video {
            pointer-events: none;
            display: flex;
        }
    </style>
</head>

<body>
    <form>
        <div id="top">
            <div id="panel">
                <a href="login_form.php"> <input type="button" value="Sign Off" name="button"></a>
            </div>
            <div id="panel1" style="position: absolute; left: 83%; top: 0.175rem;">
                <a href="contact_us.php"><input type="button" value="Contact us" name="button"></a>
            </div>
            <div id="panel2" style="position: absolute; left: 74%; top: 0.2rem;">
                <a href="Ticket_cancel.php"><input type="button" value="Cancel Ticket" name="button"></a>
            </div>
            <div id="panel3" style="position: absolute; left: 65%; top: 0.2rem;">
                <a href="About.php"><input type="button" value="About Us" name="button"></a>
            </div>
        </div>
        <div id="backvideo">
            <video autoplay muted loop width="100%">
            </video>
        </div><!--
        <div id="controls">
            <input type="submit" value="search" style="text-align: center; border-radius: 50%;">
        </div>
        <div id="search">
            <label>Please search for available Bus</label>
        </div>-->
        <div class="alt2">
            <button id="but" type="submit"><a href="/Bus/location.php"> SHOW ALL AVAILABLE BUSSES AND
                    DESTINATION</a></button>
        </div>
        <div calss="bus">
            <center>
                <h1>SELECT THE BUS OF YOUR CHOICE</h1>
                <table border="2">

                    <th>BUS ID</th>
                    <th>Bus Name</th>
                    <th>Total Sits</th>
                    <th>Booking</th>
                    <th>Destination</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Fare</th>

                    <th>Action</th>

                    <?php
                        include("PHP/busfetch.php");
                        $businfo = mysqli_query($conn, "select *FROM bus_registration ORDER BY ID DESC");
                        while ($bus_registration = mysqli_fetch_array($businfo)) {

                            ?>


                    <tr>

                        <td>
                            <?php echo $bus_registration['ID'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['Bus_Name'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['Number_of_sits'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['booking'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['destination'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['departure'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['arrival'] ?>
                        </td>
                        <td>
                            <?php echo $bus_registration['fare'] ?>
                        </td>
                        <td>
                            <button id="book"> <a href="/Bus/savebooking.php?bid=<?php echo $bus_registration['ID'] ?>"> BOOK </a></button> 
                        </td>

                    </tr>
                    <?php } ?>

                </table>
            </center>
        </div>
        <!--<div id="bus_to">
            <select name="booking">
                <option value="1">Select your booking station</option>
                <option value="2">Sirare</option>
                <option value="3">Maseno</option>
                <option value="5">Kerio North</option>
                <option value="6">Ukwala</option>
                <option value="7">Muthaiga</option>
                <option value="8">Rwika</option>
                <option value="9">Siyokimau</option>
                <option value="10">Kawangw'are</option>
                <option value="11">Kibete</option>
                <option value="12">Rongai</option>
                <option value="13">Embu</option>
                <option value="14">Siakago</option>
                <option value="15">kiritiri</option>
            </select>-->
        </div>
        <div class="destination">
            <!--<select name="destination">
                <option value="1">Select your destination station</option>
                <option value="2">Sirare</option>
                <option value="3">Maseno</option>
                <option value="5">Kerio North</option>
                <option value="6">Ukwala</option>
                <option value="7">Muthaiga</option>
                <option value="8">Rwika</option>
                <option value="9">Siyokimau</option>
                <option value="10">Kawangw'are</option>
                <option value="11">Kibete</option>
                <option value="12">Rongai</option>
                <option value="13">Embu</option>
                <option value="14">Siakago</option>
                <option value="15">kiritiri</option>
            </select>-->
        </div><!--
        <div id="travelling_on">
            <h3>Select Booking Date</h3> <input style="border-radius: 50%; width: 70%; text-align: center;" type="date"
                value="Select your travel date">
        </div>
        <div id="return_day">
            <h3>Return Day</h3> <input style="border-radius: 50%; width: 70%; text-align: center;" type="date"
                value="Select your travel date">
        </div>-->
        <div class="payment">
            <a href="payment.php"> <button type="button" value="Proceed to Payment">Proceed to Payment</button></a>
        </div>
    </form>
</body>

</html>