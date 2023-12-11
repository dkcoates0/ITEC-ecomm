<html>

<head>
    <style>
        body {
            background-color: #e6ef00;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #155488;
            font-size: 2.5em;
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            color: #155488;
            font-size: 2.5em;
            text-align: center;
            margin-top: 50px;
        }

        p {
            color: #111111;
            font-size: 1.2em;
            text-align: center;
            margin-top: 20px;
        }




    </style>
</head>


<?php
// Start the session
session_start();

// Retrieve the customer name from the session variable
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $customerName = $user['name'];
} else {
    $customerName = "Valued Customer";
}

// the thank you message
echo "<h1>Thank You, $customerName for your purchase!</h1>";
echo
"<p>Your order has been received and will be delivered soon.</p>";
?>

<h2>If you would like to shop with us again, please click the link below!</h2>
<h2><a href="login.html">->Return to login<-</a></h2>

</html>
