<?php
session_start();
$num_people = $_SESSION['num_people'] ?? 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= $num_people; $i++) {
        $_SESSION['person_' . $i] = [
            'name' => $_POST['name_' . $i],
            'age' => $_POST['age_' . $i],
        ];
    }
    header("Location: step3.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Step 2 - People Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>People Information</h1>
<form method="post" action="step2.php">
    <?php for ($i = 1; $i <= $num_people; $i++): ?>
        <h2>Person <?php echo $i; ?></h2>
        <label for="name_<?php echo $i; ?>">Name:</label><br>
        <input type="text" id="name_<?php echo $i; ?>" name="name_<?php echo $i; ?>" required><br><br>

        <label for="age_<?php echo $i; ?>">Age:</label><br>
        <input type="number" id="age_<?php echo $i; ?>" name="age_<?php echo $i; ?>" min="1" required><br><br>
    <?php endfor; ?>
    <input type="submit" value="Save and Continue">
</form>
</body>
</html>