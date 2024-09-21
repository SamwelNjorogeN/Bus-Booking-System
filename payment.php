<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Flavicon Yellow.jpg" type="image/x-icon">
    <style>
        input {
            width: 130px;
            outline: none;
            margin: 1rem;
            border: none;
            font-weight: bolder;
            text-align: center;
        }
        select{
            margin-left: -2.5rem;
        }
        h2{
            color: red;
            font-size: 15px;
        }
    </style>
    <script src="payment.js"></script>
</head>

<body>
    <form action="PHP/payment.php" method="post">
        <div class="payment" style="height: 40pc; margin-top: 1rem; height: 43rem;">
            <h1>Select your preferred mode of payment</h1>
            <h2>CASH CAN ONLY BE USED WITH LOCAL USER</h2>
            <div id="mode">
                <select id="check" name="Mode_of_payment">
                    <option><b>Select Here</b></option>
                    <option>M - Pesa</option>
                    <option>Cash </option>
                    <option>Master Card & VISA Card</option>
                </select>
                <div class="M_pesa">
                    Enter your Phone Number <input type="text" name="Phone_Number" maxlength="10">
                    Enter Amount to pay <input type="text" style="margin-left: 13%;" name="Amount" id="Amount">
                </div>
                <div id="image">
                    <img src="bankk.jpg" alt="">
                </div>
                <div class="VISA">
                    <div id="visa">
                        <label>Enter card Number</label>
                        <input type="text" style="margin-left: 13%;" placeholder="Card Number" name="Card_Number"
                            style="text-align: center;">
                        <label>Expiry Date</label> <input type="text" style="margin-left: 25%;" placeholder="Month/Year"
                            name="Expiry_date" maxlength="5" style="text-align: center;"><br>
                        Enter Amount to pay <input type="text" style="margin-left: 13%;" name="Card_Amount"
                            placeholder="Amount to Deduct">
                        <label>Security Code</label><input type="text" style="margin-left: 25%;" name="Security_Code"
                            placeholder="Security Code" maxlength="3" style="text-align: center;">
                    </div>
                </div>
                <div class="button">
                    <a link href="Local_User.php"> <button type="button">Cancel</button></a>
                    <a link href="Print ticket.php"><button type="submit">Make Payment</button></a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>