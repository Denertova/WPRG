<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Step 3 - Summary</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Summary</h1>
<h2>General Information</h2>
<p>Card Number: <?php echo $_SESSION['card_number']; ?></p>
<p>Customer Name: <?php echo $_SESSION['customer_name']; ?></p>
<p>Number of People: <?php echo $_SESSION['num_people']; ?></p>

<h2>People Information</h2>
<?php for ($i = 1; $i <= $_SESSION['num_people']; $i++): ?>
    <h3>Person <?php echo $i; ?></h3>
    <p>Name: <?php echo $_SESSION['person_' . $i]['name']; ?></p>
    <p>Age: <?php echo $_SESSION['person_' . $i]['age']; ?></p>
<?php endfor; ?>

<form method="post" action="reset.php">
    <input type="submit" value="Reset">
</form>
</body>
</html>
