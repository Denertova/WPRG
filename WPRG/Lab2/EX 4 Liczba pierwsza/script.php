<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź, czy liczba jest liczbą pierwszą</title>
</head>
<body>
<h2>Sprawdź, czy liczba jest liczbą pierwszą</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="number">Podaj liczbę:</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Sprawdź">
</form>

<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"]) && filter_var($_POST["number"], FILTER_VALIDATE_INT) !== false && $_POST["number"] > 0) {
        $number = $_POST["number"];
        $iterations = 0;
        if (isPrime($number)) {
            echo "$number jest liczbą pierwszą.";
        } else {
            echo "$number nie jest liczbą pierwszą.";
        }
    } else {
        echo "Podana wartość nie jest poprawną liczbą całkowitą dodatnią.";
    }
}
?>
</body>
</html>
