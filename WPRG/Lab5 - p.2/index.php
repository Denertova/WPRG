<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Portal Samochodowy</title>
</head>
<body>
<table>
    <tr>
        <td><a href="index.php">Strona główna</a></td>
        <td><a href="all_cars.php">Wszystkie samochody</a></td>
        <td><a href="add_car.php">Dodaj samochód</a></td>
    </tr>
</table>

<h1>Strona główna</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
    </tr>
    <?php
    $conn = new mysqli("localhost", "root", "", "mojaBaza");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, marka, model, cena FROM samochody ORDER BY cena ASC LIMIT 5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["marka"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["cena"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Brak danych</td></tr>";
    }

    $conn->close();
    ?>
</table>
</body>
</html>
