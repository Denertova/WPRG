<?php

function nazwa_dnia_tygodnia($data) {
    $dt = new DateTime($data);
    $numer_dnia = $dt->format('w');
    $nazwy_dni = array('niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota');
    return $nazwy_dni[$numer_dnia];
}

$wybrana_data = '2018-03-18';

echo "$wybrana_data to " . nazwa_dnia_tygodnia($wybrana_data);

?>