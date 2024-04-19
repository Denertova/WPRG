<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            echo "<h3>Wynik: $result</h3>";
            break;
        case "subtract":
            $result = $num1 - $num2;
            echo "<h3>Wynik: $result</h3>";
            break;
        case "multiply":
            $result = $num1 * $num2;
            echo "<h3>Wynik: $result</h3>";
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<h3>Wynik: $result</h3>";
            } else {
                echo "Nie można dzielić przez zero!";
            }
            break;
    }
}
?>
