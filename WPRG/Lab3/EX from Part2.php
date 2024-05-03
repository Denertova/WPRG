<?php

function zajmowane_miejsce($sciezka) {
    if (!file_exists($sciezka) || !is_dir($sciezka)) {
        return "Podana ścieżka nie istnieje lub nie jest katalogiem.";
    }

    $total_space = disk_total_space($sciezka);
    $free_space = disk_free_space($sciezka);
    $used_space = $total_space - $free_space;

    $formatowany_miejsce = formatuj_rozmiar($used_space);

    return "Katalog \"$sciezka\" zajmuje $formatowany_miejsce.";
}

function formatuj_rozmiar($rozmiar) {
    $jednostki = array('B', 'KB', 'MB', 'GB', 'TB');
    $indeks = 0;

    while ($rozmiar >= 1024 && $indeks < count($jednostki) - 1) {
        $rozmiar /= 1024;
        $indeks++;
    }

    return round($rozmiar, 2) . ' ' . $jednostki[$indeks];
}

$sciezka = '/var/www/html';
echo zajmowane_miejsce($sciezka);

?>
