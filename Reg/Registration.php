<!DOCTYPE html>
<html>

<head>
    <title>SignUp Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration_style.css">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
</head>


<body>

    <div class="stylish">
        <marquee>Your safety is our number one priority</marquee>
    </div>
    <div class="container">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small style="color: white;">Step 1</small></div>
            <div class="step-col"><small style="color: white;">Step 2</small></div>
            <div class="step-col"><small style="color: white;">Step 3</small></div>
        </div>
        <form id="step1" class="form">
            <h3>PERSONAL INFORMATION</h3>
            <div class="option">
                <select name="userType" id="" required>
                    <option value="type">Select User Type</option>
                    <option value="client">Client</option>
                </select>
            </div>
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Second Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <div class="btn-box">
                <button type="button" id="Next1">Next</button><br>
                <div class="login">
                    <a href="login_form.php">Login</a>
                </div>
            </div>
        </form>
        <form id="step2" class="form">
            <h3>CONTACT</h3>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="text" name="Phone" placeholder="Phone Number" required>
            <input type="file" name="image" accept="image/*">
            <div class="btn-box">
                <button type="button" id="Previous1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>
        <form id="step3" class="form">
            <h3>ENTER YOUR PASSWORD</h3>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password" placeholder="Confirm Password" required>
            <div class="btn-box">
                <button type="button" id="previous2">Back</button>
                <button type="button" id="submit">SIGNUP</button>
            </div>
        </form>
    </div>
    <script src="registration_script.js"></script>
</body>

</html>