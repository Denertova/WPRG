<?php

  echo "Zadanie 1 \n";
$fruits = ["jablko", "banan", "pomarancza"];

foreach ($fruits as $fruit) {

    $length = strlen($fruit);
    for ($i = $length - 1; $i >= 0; $i--) {
        echo $fruit[$i];
    }
    echo "\n ";


    if ($fruit[0] === 'p' || $fruit[0] === 'P') {
        echo "Zaczyna sie na 'p'.\n";
    } else {
        echo "Nie zaczyna sie na 'p'.\n";
    }
}

  echo "\nZadanie 2 \n";
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$start_range = 1;
$end_range = 100;

for ($number = $start_range; $number <= $end_range; $number++) {
    if (isPrime($number)) {
        echo $number . "\n";
    }
}

  echo "\nZadanie 3 \n";
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$N = 10;
$fibonacci_sequence = fibonacci($N);
foreach ($fibonacci_sequence as $index => $element) {
    if ($element % 2 !== 0) {
        echo ($index + 1) . ": " . $element . "\n";
    }
}

  echo "\nZadanie 4 \n";
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$text_array = explode(" ", $text);

foreach ($text_array as $index => $word) {

    $punctuation_marks = [",", ".", "'", "(", ")", ";"];
    if (in_array(substr($word, -1), $punctuation_marks)) {
        unset($text_array[$index]);
    }
}

$associative_array = [];
$index = 1;
foreach ($text_array as $element) {
    if ($index % 2 !== 0) {
        $associative_array[$element] = isset($text_array[$index]) ? $text_array[$index] : null;
    }
    $index++;
}

foreach ($associative_array as $key => $value) {
    echo $key . " => " . $value . "\n";
}

?>
