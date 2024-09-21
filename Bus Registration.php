<!DOCTYPE html>
<html>

<head>
    <title>Bus Registration</title>
    <link rel="stylesheet" href="Bus Registration.css">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
    <style>
        select {
            width: 80%;
            text-align: center;
        }

        .book,
        .bok {
            margin-left: 42%;
            margin-top: -1em;
        }

        .bus,
        .driver {
            width: 380px;
            height: 40.1rem;
            margin-top: 1%;
            background: rgb(209, 56, 127);
            display: grid;
            margin-left: 34%;
            padding-left: 1%;

        }

        .time,.tme {
            margin-left: 16%;
            margin-top: -1em;
        }

        input[type="time"],
        select {
            background-color: rgb(209, 56, 127);
            border: none;
            outline: none;
            color: white;
            font-weight: bolder;
        }
    </style>

</head>

<body>
    <form action="PHP/bus_registration.php" method="post">
        <div class="bus">
            <h1>BUS REGISTRATION</h1>
            <label>Bus Name </label><input type="text" placeholder="Bus Name" required name="Bus Name">
            <label>Number Plate</label> <input type="text" placeholder="Number Plate" required name="Number Plate">
            <label>Number of sits</label> <input type="text" placeholder="sits" required name="Number of sits">
            <label>Bus Type</label> <input type="text" placeholder="Bus Type" required name="Bus Type">
            <label>Log Book</label> <input type="text" placeholder="Log Book Number" required name="Log Book">
            <label>Bus Condition</label> <input type="text" placeholder="Condition" name="Bus Condition" required>
            <label>Bus Ownership</label> <input type="text" placeholder="Company/Individual Name" name="Bus Ownership">
            <label>Assign Booking Point</label>
            <div class="book">
                <select name="booking">
                    <option>Select your Booking Point</option>
                    <option> Sirare </option>
                    <option> Maseno </option>
                    <option> Kerio North </option>
                    <option> Ukwala </option>
                    <option> Muthaiga </option>
                    <option> Rwika </option>
                    <option> Siyokimau </option>
                    <option> Kawangware </option>
                    <option> Kibete </option>
                    <option> Rongai </option>
                    <option> Embu </option>
                    <option> Siakago </option>
                    <option> kiritiri </option>
                </select>
            </div>
            <label>Assign Destination</label>
            <div class="bok">
                <select name="destination">
                    <option>Select your destination station</option>
                    <option> Sirare </option>
                    <option> Maseno </option>
                    <option> Kerio North </option>
                    <option> Ukwala </option>
                    <option> Muthaiga </option>
                    <option> Rwika </option>
                    <option> Siyokimau </option>
                    <option> Kawangware </option>
                    <option> Kibete </option>
                    <option> Rongai </option>
                    <option> Embu </option>
                    <option> Siakago </option>
                    <option> kiritiri </option>
                </select>
            </div>
            <label for="time-input">Departure Time</label>
            <div class="time"><input type="time" id="time-input" name="departure"></div>
            <script>
                function getTime() {
                    var timeInput = document.getElementById("time-input").value;
                }
            </script>
            <label for="time-input">Arrival Time</label>
            <div class="tme"> <input type="time" id="time-input" name="arrival"></div>
            <label>Fare Price</label> <input type="text" name="fare" placeholder="Enter Amount">
            <div class="but1">
                <button type="submit">SAVE</button>
            </div>
    </form>
</body>

</html>