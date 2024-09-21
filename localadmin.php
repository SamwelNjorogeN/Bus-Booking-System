<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>User Crededntial</title>
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
    <h2>IGNITE BUS BOOKING LOCAL AND ADMIN USERS INFORMATION</h2>
    <table border="2">

        <th>ID NUMBER</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Phone Number</th>
        <th>Password</th>
        <th>User Type</th>


        <?php
        include("PHP/localadmin.php");
        $registrations = mysqli_query($conn, "select * from local_registration ORDER BY ID DESC");
        while ($registration = mysqli_fetch_array($registrations)) {

            ?>


            <tr>
                
                <td>
                    <?php echo $registration['ID_Passport_Number'] ?>
                </td>
                <td>
                    <?php echo $registration['First_Name'] ?>
                </td>
                <td>
                    <?php echo $registration['Last_Name'] ?>
                </td>
                <td>
                    <?php echo $registration['UserName'] ?>
                </td>
                <td>
                    <?php echo $registration['Phone_Number'] ?>
                </td>
                <td>
                    <?php echo $registration['password'] ?>
                </td>
                <td>
                    <?php echo $registration['User_Type'] ?>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>