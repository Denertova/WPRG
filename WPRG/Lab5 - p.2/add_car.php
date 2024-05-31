<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj Samochód</title>
</head>
<body>
<table>
    <tr>
        <td><a href="index.php">Strona główna</a></td>
        <td><a href="all_cars.php">Wszystkie samochody</a></td>
        <td><a href="add_car.php">Dodaj samochód</a></td>
    </tr>
</table>

<h1>Dodaj Samochód</h1>
<form action="add_car.php" method="post">
    <label for="marka">Marka:</label>
    <input type="text" id="marka" name="marka" required><br><br>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br><br>
    <label for="cena">Cena:</label>
    <input type="number" step="0.01" id="cena" name="cena" required><br><br>
    <label for="rok">Rok:</label>
    <input type="number" id="rok" name="rok" required><br><br>
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis" required></textarea><br><br>
    <input type="submit" value="Dodaj">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "mojaBaza");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $marka = $conn->real_escape_string($_POST["marka"]);
    $model = $conn->real_escape_string($_POST["model"]);
    $cena = $conn->real_escape_string($_POST["cena"]);
    $rok = $conn->real_escape_string($_POST["rok"]);
    $opis = $conn->real_escape_string($_POST["opis"]);

    $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', '$cena', '$rok', '$opis')";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy samochód został dodany pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
</body>
</html>
