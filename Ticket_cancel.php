<!DOCTYPE html>
<html>

<head>
    <title>Cancel Ticket</title>
    <link rel="stylesheet" href="Ticket _cancel.css">
    <link rel="shortcut icon" href="Flavicon Yellow White.jpg" type="image/x-icon">
    <style>
        h2 {
            text-align: center;
            color: white;
        }
        marquee{
            color: white;
        }
    </style>
</head>

<body>
    <form action="PHP/Ticket _cancel.php" method="post">
        <marquee>We value you for booking without you we have no business and you with us
            we make your travel safe. Your safety our priority
        </marquee>
        <div class="cancel">
            <div id="content">
                <h2>Ticket Cancellation</h2>
                <P>One can only cancel their ticket before oneday to travel</P><br>
                <p>Enter your Ticket Number<br> </p><input type="text" name="Ticket Number" placeholder="Enter Ticket Number" required>
                <div class="check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                    <label class="form-check-label" for="form2Example34"><a href="terms and condition.php">Terms and
                            Condition</a> </label>
                </div>
                <button type="submit">Cancel</button>
            </div>
        </div>
    </form>
</body>

</html>