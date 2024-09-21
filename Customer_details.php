<!DOCTYPE html>
<html>

<head>
    <title>Customer Details</title>
    <link rel="stylesheet" href="Customer_details.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
</head>

<body>
    <form method="post" action="PHP/localData.php" id="customerForm" >
    <input type="hidden" name="bid" value="<?= $_GET['bid']?>">
        <div class="container">
            <div class="form">
                <h3>Customer Information</h3>
                <div class="id">
                    <label>ID/Passport Number</label> <input type="text" required name="passport">
                </div>
                <div class="info">
                    <label>First Name</label> <input type="text" name="First_Name" required>
                    <label>Middle Name</label><input type="text" name="Middle_Name" required>
                    <label>Last Name</label> <input type="text" name="Last_Name" required>
                </div>

                <div class="gender">
                    <label>SEX</label>
                    <select name="gender">
                        <option> Female </option>
                        <option> Male </option>
                    </select>
                    </gender>
                </div>
                <div class="birth">
                    <label>Date of Birth</label> <input type="date" required name="DOB" >
                    <label>Contact</label> <input type="text" required name="Contact" >
                    <label>Place of Birth</label> <input type="text" required name="place" >
                </div>
                <div class="emergency">
                    <h3>Emegerncy Information</h3>
                    <label>First Name</label> <input type="text" name="FirstName" required>
                    <label>Middle Name</label> <input type="text" name="MiddleName" required>
                    <label>Last Name</label> <input type="text" name="LastName" required>
                    <label>Relation</label>
                    <select name="relation">
                        <option> Father </option>
                        <option> Mother </option>
                        <option> Brother </option>
                        <option> Sister </option>
                        <option> Friend </option>
                    </select><br>
                    <label>Emergency Contact</label> <input type="text" name="Emergency" required>
                </div>
                <div class="button1">
                    <button type="submit" onclick="showAlert()" >Save</button>
                </div>
                <div class="button2">
                 <button type="submit">Proceed to payment</button>
                </div>
            </div>
        </div>
        
    </form>
    <script>/*
        function showAlert() {
            alert("Registration is successful!");
        }*/
    </script>
</body>

</html>