<!DOCTYPE html>
<html>

<head>
    <title>Driver Vehicle Assigning</title>
    <link rel="stylesheet" href="vehicle_assign.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        ::placeholder {
            color: white;
        }

        input:hover {
            background: blue;
        }

        h2 {
            padding-top: 1pc;
            margin-bottom: 1pc;
            text-align: center;
        }
    </style>
</head>

<body>
    <form id="vehicle_assign" action="PHP/vehicle_assignment.php" method="post">
        <div class="vehicle">
            <h2>VEHICLE ASSIGNING TO DRIVER</h2>
            <label>First Name </label> <input type="text" id="kenya" name="First_Name" placeholder="First Name"
                required><br>
            <span id="userTypeError" class="error"></span><br>

            <label>Middle Name </label> <input type="text" id="main" name="Middle_Name" placeholder="Last Name"
                required><br>
            <span id="mainError" class="error"></span><br>

            <label>Last Name </label> <input type="text" id="kenya1" name="Last_Name" placeholder="Last Name"
                required><br>
            <span id="kenya1Error" class="error"></span><br>

            <label> ID Number</label> <input type="text" id="kenya2" name="ID_Number" placeholder="ID Number" required>
            <h2>CAR ASSIGNED DETAILS</h2>
            <span id="kenya2Error" class="error"></span><br>

            <label>Vehicle Number</label> <input type="text" id="kenya3" name="Car_Number" placeholder="Car Number"
                required><br>
            <span id="kenya3Error" class="error"></span><br>

            <label>Number of sits</label> <input type="text" id="kenya4" name="Number_of_sits"
                placeholder="Passenger Capacity" required>
            <span id="kenya4Error" class="error"></span><br>

            <button type="submit">ASSIGN</button>
        </div>
    </form>
    <script>
        const form = document.getElementById('vehicle_assign');
        const kenya = document.getElementById('kenya');
        const main = document.getElementById('main');
        const kenya1 = document.getElementById('kenya1');
        const kenya2 = document.getElementById('kenya2');
        const kenya3 = document.getElementById('kenya3');
        const kenya4 = document.getElementById('kenya4');


        function validateForm() {
            let isValid = true;

            if (kenya.value === '') {
                displayError(kenyaError, 'Invalid');
                isValid = false;
            }

            if (main.value === '') {
                displayError(mainError, 'Invalid');
                isValid = false;
            }

            if (kenya1.value === '') {
                displayError(kenya1Error, 'Invalid');
                isValid = false;
            }


            if (kenya2.value === '') {
                displayError(kenya2Error, 'Invalid');
                isValid = false;
            } else if (!validatePhone(kenya2.value)) {
                displayError(kenya2Error, 'Please enter a valid phone number (digits only)');
                isValid = false;
            }

            if (kenya3.value === '') {
                displayError(kenya3Error, 'Enter Car Number');
                isValid = false;
            }


            if (kenya4.value === '') {
                displayError(kenya4Error, 'Invalid');
                isValid = false;
            } else if (!validatekenya4(kenya4.value)) {
                displayError(kenya4Error, 'Please enter a valid phone number (digits only)');
                isValid = false;
            }


            return isValid;
        }


        function validatekenya2(kenya2) {
            const kenya2Pattern = /^\d+$/;
            return kenya2Pattern.test(kenya2);
        }

        function displayError(element, message) {
            element.textContent = message;
            alert('message')
        }


        function validatekenya4(kenya4) {
            const kenya4Pattern = /^\d+$/;
            return kenya4Pattern.test(kenya4);
        }

        function displayError(element, message) {
            element.textContent = message;
        }

        function resetErrors() {
            const errorElements = form.getElementsByClassName('error');
            for (let i = 0; i < errorElements.length; i++) {
                errorElements[i].textContent = '';
            }
        }

        // Prevent entering non-digit characters in the phone field
        kenya2.addEventListener('input', function (event) {
            event.target.value = event.target.value.replace(/\D/g, '');
        });

        // Prevent entering non-digit characters in the phone field
        kenya4.addEventListener('input', function (event) {
            event.target.value = event.target.value.replace(/\D/g, '');
        });
    </script>
</body>

</html>