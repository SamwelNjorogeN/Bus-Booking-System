<!DOCTYPE html>
<html>

    <head>
        <title>Rocky Local User</title>
        <link rel="stylesheet" href="Local_User.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
        <style>
            table {
                position: relative;
                border-collapse: collapse;
                margin-top: 19%;
                text-align: center;
                left: 20%;
                border-color: cyan;
            }
            #bus_to,.destination{
                margin-left: 10%;
            }
            a {
            color: white;
            text-decoration: none;
        }
        tr{
            color: white;
        }
        th{
            color: white;
            width: 5em;
        }
        
        </style>

    </head>

    <body>
        <div id="top">
            <div id="panel">
                <a href="login_form.php"><input type="button" value="Sign Off" name="button"></a>
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
        <form
            method="GET" action="">
                    <div id="backvideo">
                        <video autoplay muted loop width="100%">
                            <source src="YUTONG Used Bus.mp4" type="video/mp4">
                        </video>
                    </div>
            <div id="controls">
                <input type="submit" value="search" style="text-align: center; border-radius: 50%;">
            </div>
            <div id="search">
                <label>Please search for available Bus</label>
            </div>
            <div class="all">
                
            <div id="bus_to">
                <select name="booking">
                    <option value="1">Select your booking station</option>
                    <option value="Sirare">Sirare</option>
                    <option value="Maseno">Maseno</option>
                    <option value="Kerio North">Kerio North</option>
                    <option value="Ukwala">Ukwala</option>
                    <option value="Muthaiga">Muthaiga</option>
                    <option value="Rwika">Rwika</option>
                    <option value="Siyokimau">Siyokimau</option>
                    <option value="Kawangware">Kawangw'are</option>
                    <option value="Kibete">Kibete</option>
                    <option value="Rongai">Rongai</option>
                    <option value="Embu">Embu</option>
                    <option value="Siakago">Siakago</option>
                    <option value="Kiritiri">kiritiri</option>
                </select>
            </div>
            <div class="destination">
                <select name="destination">
                    <option value="1">Select your Destination station</option>
                    <option value="Sirare">Sirare</option>
                    <option value="Maseno">Maseno</option>
                    <option value="Kerio North">Kerio North</option>
                    <option value="Ukwala">Ukwala</option>
                    <option value="Muthaiga">Muthaiga</option>
                    <option value="Rwika">Rwika</option>
                    <option value="Siyokimau">Siyokimau</option>
                    <option value="Kawangware">Kawangw'are</option>
                    <option value="Kibete">Kibete</option>
                    <option value="Rongai">Rongai</option>
                    <option value="Embu">Embu</option>
                    <option value="Siakago">Siakago</option>
                    <option value="Kiritiri">kiritiri</option>
                </select>
            </div>
            </div>

            <!--
                    <div id="travelling_on">
                        <h3>Select Booking Date</h3> <input style="border-radius: 50%; width: 70%; text-align: center;" type="date"
                            value="Select your travel date">
                    </div>
                    <div id="return_day">
                        <h3>Return Day</h3> <input style="border-radius: 50%; width: 70%; text-align: center;" type="date"
                            value="Select your travel date">
                    </div>-->

        </form>
        <?php
             if( isset($_GET['booking'])  && isset($_GET['destination']) ){ 
                $booking = $_GET['booking'];
                $destination = $_GET['destination'];


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

                $results=mysqli_query($conn,"SELECT * FROM bus_registration WHERE booking='$booking' 
                AND destination='$destination' ");

             

        ?>
        <table border="4">
            <th>BUS ID</th>
            <th>Bus Name</th>
            <th>Number of Seats</th>
            <th>Booking</th>
            <th>Destination</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Fare</th>
            <th>Book</th>

            <?php
                   while ($bus_registration = mysqli_fetch_array($results)) {
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
                        <button id="book">
                            <a href="Customer_details.php?bid=<?php echo  $bus_registration['ID'] ?>">
                                BOOK
                            </a>
                        </button>
                    </td>
                </tr>

            <?php
                   }
                   ?>
        </table>
    <?php
             }
        ?>
</html></body></html>
