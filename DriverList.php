<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Driver List</title>
    <link rel="stylesheet" href="tails.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    
    <style>
        table {
            border-collapse: collapse;
            margin-left: 13%;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>IGNITE BUS BOOKING CUSTOMER INFORMATION</h2>
    <table border="2">

        
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>National ID</th>
        <th>Licence Number</th>


        <?php
        include("PHP/Driverlistfetch.php");
        $driver = mysqli_query($conn, "select * from driver_registration ORDER BY ID DESC");
        while ($driver_registration = mysqli_fetch_array($driver)) {

            ?>


            <tr>
                
                
                <td>
                    <?php echo $driver_registration['First_Name'] ?>
                </td>
                <td>
                    <?php echo $driver_registration['Middle_Name'] ?>
                </td>
                <td>
                    <?php echo $driver_registration['Last_Name'] ?>
                </td>
                <td>
                    <?php echo $driver_registration['National_ID'] ?>
                </td>
                <td>
                    <?php echo $driver_registration['Licence_Number'] ?>
                </td>
                
            </tr>
        <?php } ?>

    </table>
    <div class="download">
        <button id="download">Download</button>
        <button id="downloadButton">Print</button>
    </div>
    <script src="download.js" ></script>
</body>

</html>