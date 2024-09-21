<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <form action="PHP/login.php" method="POST">
        <div class="login">
            <div class="loginform">
                <div class="controls">
                    <h3>Login with your credentials</h3>
                    <img src="Flavicon Yellow White.jpg" alt="">
                    <select name="User_Type" id="role">
                        <option>Select User Type</option>
                        <option>Admin</option>
                        <option>Local User</option>
                        <option>Client</option>
                    </select>

                    <input type="text" name="User_Name" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required min="6" max="9">
                    <div class="remember">
                        <input type="checkbox" name="checkbox">
                        <span>Remember Me</span>
                    </div>
                    <button name="Login" type="submit"> LOGIN </button>
                    <!--<a href="Client_page.php"><input type="button" name="Pilot" value="Pilot"></a>-->
                    
                </div>
                <script>
                    // Add an event listener to the button
                    /*document.getElementById("user").addEventListener("click", userrole);

                    function userrole() {
                        var role = document.getElementById("role").value;
                        if (role == "Admin") {
                            window.location.assign("Admin_panel.php");
                        } else if (role == "Local User") {
                            window.location.assign("Local_User.php");
                        } else if (role == "Client") {
                            window.location.assign( "Client_page.php");
                        }
                    }*/
                </script>
            </div>
    </form>
</body>

</html>