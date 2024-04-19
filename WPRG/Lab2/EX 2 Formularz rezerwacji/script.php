<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
    <h2>Podsumowanie rezerwacji</h2>
    <?php
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $num_people = $_POST["num_people"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $credit_card = $_POST["credit_card"];
        $arrival_date = $_POST["arrival_date"];
        $arrival_time = $_POST["arrival_time"];
        $extra_bed = isset($_POST["extra_bed"]) ? "Tak" : "Nie";
        $amenities = isset($_POST["amenities"]) ? implode(", ", $_POST["amenities"]) : "Brak";

        echo "<p>Liczba osób: $num_people</p>";
        echo "<p>Imię: $first_name</p>";
        echo "<p>Nazwisko: $last_name</p>";
        echo "<p>Adres: $address</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Dane karty kredytowej: $credit_card</p>";
        echo "<p>Data przyjazdu: $arrival_date</p>";
        echo "<p>Godzina przyjazdu: $arrival_time</p>";
        echo "<p>Dostawienie łóżka dla dziecka: $extra_bed</p>";
        echo "<p>Udogodnienia: $amenities</p>";
    }
    ?>
</body>
</html>
