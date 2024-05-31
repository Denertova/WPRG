<?php
$max_visits = 5;

if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}

setcookie('visit_count', $visit_count, time() + (30 * 24 * 60 * 60));

echo "This is your visit number: $visit_count<br>";

if ($visit_count >= $max_visits) {
    echo "You have visited this page $visit_count times!<br>";
} else {

    $remaining_visits = $max_visits - $visit_count;
    echo "You need to visit this page $remaining_visits more time(s) to see a special message.<br>";
}

echo '<a href="reset_counter.php">Reset visit count</a>';
?>
