<?php

date_default_timezone_set('Europe/Warsaw');

$nazwy_dni = array(
    'niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota'
);

$current_timestamp = time();

$dzien_tygodnia = $nazwy_dni[date('w', $current_timestamp)];

$nazwy_miesiecy = array(
    'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca',
    'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'
);

$numer_miesiaca = date('n', $current_timestamp) - 1;
$miesiac = $nazwy_miesiecy[$numer_miesiaca];

$data = date('d', $current_timestamp) . ' ' . $miesiac . ' ' . date('Y', $current_timestamp);

$czas_12h = date('h:i:s A', $current_timestamp);

$roznica_gmt = date('P', $current_timestamp);

echo "Dziś jest $dzien_tygodnia, $data, $czas_12h, $roznica_gmt GMT.";

?>
