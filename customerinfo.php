<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>customer Details</title>
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

        <th>Passport/ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>D.O.B</th>
        <th>Birth Place</th>
        <th>Emerg F Name</th>
        <th>Emerg M Name</th>
        <th>Emerg L Name</th>
        <th>Relation</th>
        <th>Emergency Contact</th>


        <?php
        include("PHP/customerfetch.php");
        $customer_details = mysqli_query($conn, "select * from customerdetails ORDER BY ID DESC");
        while ($customerdetails = mysqli_fetch_array($customer_details)) {

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
                <?php echo $customerdetails['DOB'] ?>
            </td>
            <td>
                <?php echo $customerdetails['place'] ?>
            </td>
            <td>
                <?php echo $customerdetails['FirstName'] ?>
            </td>
            <td>
                <?php echo $customerdetails['MiddleName'] ?>
            </td>
            <td>
                <?php echo $customerdetails['LastName'] ?>
            </td>
            <td>
                <?php echo $customerdetails['relation'] ?>
            </td>
            <td>
                <?php echo $customerdetails['Emergency'] ?>
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