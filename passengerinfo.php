<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Passenger Liat</title>
    <link rel="stylesheet" href="tails.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        table {
            border-collapse: collapse;
            margin-left: 33%;
            text-align: center;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>IGNITE BUS BOOKING PASSENGER LIST</h1>
    <table border="2">

        <th>Passport/ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Contact</th>


        <?php
        include("PHP/passengerfetch.php");
        
        
        
        $passengerinfo = mysqli_query($conn, "select * from customerdetails ORDER BY ID DESC");
        while ($customerdetails = mysqli_fetch_array($passengerinfo)) {



            ?>


            <tr>
                
                <td>
                    <?php echo $customerdetails['passport'] ?>
                </td>
                <td>
                    <?php echo $customerdetails['First_Name'] ?>
                </td>
                <td>
                    <?php echo $customerdetails['Middle_Name'] ?>
                </td>
                <td>
                    <?php echo $customerdetails['Last_Name'] ?>
                </td>
                <td>
                    <?php echo $customerdetails['gender'] ?>
                </td>
                <td>
                    <?php echo $customerdetails['Contact'] ?>
                </td>
               
            </tr>
        <?php } ?>

    </table>
    <div class="download">
       <a href="download.php"><button id="download">Download</button></a> 
        <button id="downloadButton">Print</button>
    </div>
    <script src="download.js" ></script>
</body>

</html>