<!DOCTYPE html>
<html>

<head>
    <title>Driver Registration</title>
    <link rel="stylesheet" href="Bus Registration.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        input,label{
            margin-top: -2%;
        }
        h1{
            padding-bottom: 6%;
        }
    </style>
</head>

<body>
    <form action="PHP/driver_registration.php" method="post" id="driverRegistration">
        <div class="driver">
            <h1>DRIVER REGISTRATION</h1>
            <label>First Name</label> <input type="text" id="firstName" name="First_Name" placeholder="First Name"
                required>
            <span id="firstNameError" class="error"></span><br>

            <label>Middle Name</label> <input type="text" id="middleName" name="Middle_Name" placeholder="Middle Name"
                required>
            <span id="middleNameError" class="error"></span><br>

            <label>Last Name</label> <input type="tex" id="lastName" name="Last_Name" placeholder="Last Name" required>
            <span id="lastNameError" class="error"></span><br>

            <label>ID Number</label> <input type="text" id="nationalID" name="National_ID" placeholder="National ID"
                required>
            <span id="nationalIDError" class="error"></span><br>

            <label>Drivers License</label> <input type="text" id="licence" name="Licence Number"
                placeholder="Licence Number" value="DL-" required>
            <span id="licenceError" class="error"></span><br>

            <label>Category</label><input type="text" id="clasp" name="Category" placeholder="Class AB, Class c etc"
                value="CLASS " required>
            <span id="claspError" class="error"></span><br>

            <label>Passport</label> <input type="file" id="image" name="image" accept="image/*">
            <span id="imageError" class="error"></span><br>

            <div class="but2">
                <button type="submit">Upload</button>
            </div>
        </div>
    </form>
    <script src="driverRegistration.js" ></script>

</body>

</html>