<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="Registration.css">
    <style>
        input {
            width: 200px;
            margin-top: 3%;
            margin-left: 20%;
            text-align: center;
            font-size: 15px;
            border: none;
            font-weight: bolder;
            outline: none;
            color: white;

        }

        .container {
            height: 37rem;
            margin-top: 2%;
        }
    </style>
</head>

<body>

    <form id="registrationForm" action="PHP/regstration.php" method="post" >
        <div class="container">
            <h2>ENTER YOUR CREDENTIALS</h2>
            <label for="userType">User_Type</label>
            <select id="userType" name="User_Type">
                <option value="">Select User Type</option><br>
                <option value="client">Client</option>
            </select>
            <span id="userTypeError" class="error"></span><br>

            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="First_Name" placeholder="First Name" >
            <span id="firstNameError" class="error"></span><br>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="Last_Name" placeholder="Last Name">
            <span id="lastNameError" class="error"></span><br>


            <label for="userName">User Name</label>
            <input type="text" id="userName" name="User_Name" placeholder="User Name">
            <span id="userNameError" class="error"></span><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="Email" placeholder="Valid email contain @gmail.com">
            <span id="emailError" class="error"></span><br>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="Phone_Number" placeholder="Phone Number">
            <span id="phoneError" class="error"></span><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="Password" placeholder="Enter Password">
            <span id="passwordError" class="error"></span><br>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="Confirm_Password" placeholder="Confirm Password">
            <span id="confirmPasswordError" class="error"></span><br>

            <button type="submit" value="Register">Register</button>
        </div>
    </form>
    <script>
        const form = document.getElementById('registrationForm');
        const userType = document.getElementById('userType');
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const userName = document.getElementById('userName');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Reset error messages
            clearErrors();

            // Validate User Type
            if (!userType.value) {
                showError('userTypeError', 'Please select a user type');
            }

            // Validate First Name
            if (!firstName.value.trim()) {
                showError('firstNameError', 'First Name is required');
            }

            // Validate Last Name
            if (!lastName.value.trim()) {
                showError('lastNameError', 'Last Name is required');
            }

            // Validate User Name
            if (!userName.value.trim()) {
                showError('userNameError', 'User Name is required');
            }

            // Validate Email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim()) {
                showError('emailError', 'Email is required');
            } else if (!emailRegex.test(email.value)) {
                showError('emailError', 'Please enter a valid email address');
            }

            // Validate Phone Number
            const phoneRegex = /^\d+$/;
            if (!phone.value.trim()) {
                showError('phoneError', 'Phone Number is required');
            } else if (!phoneRegex.test(phone.value)) {
                showError('phoneError', 'Please enter a valid phone number (numbers only)');
            }

            // Validate Password
            if (!password.value.trim()) {
                showError('passwordError', 'Password is required');
            }

            // Validate Confirm Password
            if (!confirmPassword.value.trim()) {
                showError('confirmPasswordError', 'Confirm Password is required');
            } else if (password.value !== confirmPassword.value) {
                showError('confirmPasswordError', 'Passwords do not match');
            }

            // If all fields are valid, submit the form
            if (isValidForm()) {
                form.submit();
            }
        });

        function clearErrors() {
            const errorElements = document.getElementsByClassName('error');
            for (let i = 0; i < errorElements.length; i++) {
                errorElements[i].textContent = '';
            }
        }

        function showError(elementId, errorMessage) {
            const errorElement = document.getElementById(elementId);
            errorElement.textContent = errorMessage;
        }

        function isValidForm() {
            const errorElements = document.getElementsByClassName('error');
            for (let i = 0; i < errorElements.length; i++) {
                if (errorElements[i].textContent !== '') {
                    return false;
                }
            }
            return true;
        }
    </script>
    

</body>

</html>