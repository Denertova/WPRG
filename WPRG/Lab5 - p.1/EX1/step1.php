<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['customer_name'] = $_POST['customer_name'];
    $_SESSION['num_people'] = $_POST['num_people'];
    header("Location: step2.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Step 1 - General Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>General Information</h1>
<form method="post" action="step1.php">
    <label for="card_number">Card Number:</label><br>
    <input type="text" id="card_number" name="card_number" required><br><br>

    <label for="customer_name">Customer Name:</label><br>
    <input type="text" id="customer_name" name="customer_name" required><br><br>

    <label for="num_people">Number of People:</label><br>
    <input type="number" id="num_people" name="num_people" min="1" required><br><br>

    <input type="submit" value="Next">
</form>
</body>
</html>
