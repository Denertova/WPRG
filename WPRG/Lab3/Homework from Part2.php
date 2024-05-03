<?php

function usun_katalog($sciezka) {
    if (!file_exists($sciezka) || !is_dir($sciezka)) {
        return "Podana ścieżka nie istnieje lub nie jest katalogiem.";
    }

    // Usuwanie katalogu
    if (!rmdir($sciezka)) {
        return "Nie można usunąć katalogu \"$sciezka\". Sprawdź uprawnienia dostępu.";
    }

    return "Katalog \"$sciezka\" został pomyślnie usunięty.";
}

$sciezka = '/var/www/html/test';
echo usun_katalog($sciezka);

?>