<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz rezerwacji hotelu</title>
</head>
<body>
<h2>Formularz rezerwacji hotelu</h2>
<form action="" method="post">
    <label for="num_people">Liczba osób:</label>
    <select name="num_people" id="num_people" required>
        <option value="" selected disabled hidden>Wybierz liczbę osób</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select><br><br>

    <input type="submit" value="Zarezerwuj">
</form>

<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $num_people = $_POST["num_people"];

    for ($i = 1; $i <= $num_people; $i++) {
        echo "<h2>Podsumowanie rezerwacji</h2>";
        echo "<h3>Dane osoby $i</h3>";

        $first_name = $_POST["first_name_$i"];
        $last_name = $_POST["last_name_$i"];
        $address = $_POST["address_$i"];
        $email = $_POST["email_$i"];
        $credit_card = $_POST["credit_card_$i"];
        $arrival_date = $_POST["arrival_date_$i"];
        $arrival_time = $_POST["arrival_time_$i"];
        $extra_bed = isset($_POST["extra_bed_$i"]) ? "Tak" : "Nie";
        $amenities = isset($_POST["amenities_$i"]) ? implode(", ", $_POST["amenities_$i"]) : "Brak";

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
        echo "<hr>";
    }
}
?>
</body>
</html>
