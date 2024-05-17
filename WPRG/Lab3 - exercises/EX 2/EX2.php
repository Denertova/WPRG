<?php
if (isset($_GET['fibNumber'])) {
    $n = intval($_GET['fibNumber']);

    // Funkcja rekurencyjna
    function fibonacciRecursive($n) {
        if ($n <= 1) {
            return $n;
        }
        return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
    }

    // Funkcja iteracyjna
    function fibonacciIterative($n) {
        if ($n <= 1) {
            return $n;
        }
        $fib = [0, 1];
        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib[$n];
    }

    // Pomiar czasu dla funkcji rekurencyjnej
    $startRecursive = microtime(true);
    $resultRecursive = fibonacciRecursive($n);
    $endRecursive = microtime(true);
    $timeRecursive = $endRecursive - $startRecursive;

    // Pomiar czasu dla funkcji iteracyjnej
    $startIterative = microtime(true);
    $resultIterative = fibonacciIterative($n);
    $endIterative = microtime(true);
    $timeIterative = $endIterative - $startIterative;

    echo "Rekurencyjna funkcja Fibonacciego dla n=$n wynosi: $resultRecursive<br>";
    echo "Czas działania funkcji rekurencyjnej: $timeRecursive sekund<br>";
    echo "Iteracyjna funkcja Fibonacciego dla n=$n wynosi: $resultIterative<br>";
    echo "Czas działania funkcji iteracyjnej: $timeIterative sekund<br>";

    if ($timeRecursive < $timeIterative) {
        $diff = $timeIterative - $timeRecursive;
        echo "Funkcja rekurencyjna była szybsza o $diff sekund<br>";
    } else {
        $diff = $timeRecursive - $timeIterative;
        echo "Funkcja iteracyjna była szybsza o $diff sekund<br>";
    }
}
?>