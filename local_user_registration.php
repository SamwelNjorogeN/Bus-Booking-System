<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Local Registration</title>
    <link rel="stylesheet" href="Local_User registration.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        #id {
            margin-left: -7%;
            margin-top: 2%;
            padding-bottom: 0%;
        }

        form {
            border-radius: 10%;
            margin-top: 2%;
            height: 38rem;
        }
        #casp{
            padding: 0%;
        }
    </style>
</head>

<body>
    <form action="PHP/local_user_registration.php" method="post">
        <h2><strong>Local User Account Creation</strong></h2>
        <div id="detail">
            <div id="id">
                <label>ID/Pasport Number</label>
                <input type="text" placeholder="ID Number" name="ID_Passport_Number" required>
            </div>
            <div id="detail">
                <label>First Name</label>
                <input type="text" id="fname" name="First_Name" placeholder="First Name" required>
            </div>

            <div id="name">
                <label>Last Name</label>
                <input type="text" name="Last_Name" placeholder="Last Name" required>
            </div>

            <div id="phone">
                <label>Phone Number</label>
                <input type="text" name="Phone_Number" placeholder="Contact" required>
            </div>
            <div class="user">

                <label>User Name</label>
                <input type="text" name="UserName" placeholder="User Name" required style=" margin-left: 10%;">
            </div>
            <div class="user1">

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required style=" margin-left: 10%;">
            </div>

            <label id="casp">Confirm Password</label>
            <input type="password" name="confirm" placeholder="Confirm Password" required style=" margin-left: 10%;">

            <label>User_Type</label>
            <select name="User_Type">
                <option> Select User </option>
                <option> Local User </option>
                <option> Admin </option>
            </select>
            <div id="but">
                <a link href="Admin_panel.php"> <button type="submit">Save Credentials</button></a>
            </div>
        </div>
    </form>
</body>

</html>