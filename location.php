<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Booking Section</title>
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            position: relative;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h1>IGNITE BUS BOOKING PASSENGER LIST</h1>
        <table border="2">

            <th>BUS ID</th>
            <th>Bus Name</th>
            <th>Total Sits</th>
            <th>Booking</th>
            <th>Destination</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Fare</th>


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

            </tr>
            <?php } ?>

        </table>
        </center>
</body>

</html>