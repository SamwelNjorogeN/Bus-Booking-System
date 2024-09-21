<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>User Crededntial</title>
    <link rel="stylesheet" href="tails.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        table {
            border-collapse: collapse;
            margin-left: 25%;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>IGNITE BUS BOOKING SYSTEM USERS INFORMATION</h2>
    <table border="2">

        <th>User Type</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Password</th>


        <?php
        include("PHP/userfetch.php");
        $registrations = mysqli_query($conn, "select * from registration ORDER BY ID DESC");
        while ($registration = mysqli_fetch_array($registrations)) {

            ?>


            <tr>
                
                <td>
                    <?php echo $registration['User_Type'] ?>
                </td>
                <td>
                    <?php echo $registration['First_Name'] ?>
                </td>
                <td>
                    <?php echo $registration['Last_Name'] ?>
                </td>
                <td>
                    <?php echo $registration['User_Name'] ?>
                </td>
                <td>
                    <?php echo $registration['Email'] ?>
                </td>
                <td>
                    <?php echo $registration['Phone_Number'] ?>
                </td>
                <td>
                    <?php echo $registration['Password'] ?>
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