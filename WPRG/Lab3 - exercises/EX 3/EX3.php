<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $path = rtrim($_POST['path'], '/') . '/';
    $dirname = $_POST['dirname'];
    $operation = $_POST['operation'] ?? 'read';

    switch ($operation) {
        case 'create':
            createDirectory($path, $dirname);
            break;
        case 'delete':
            deleteDirectory($path, $dirname);
            break;
        case 'read':
        default:
            readDirectory($path, $dirname);
            break;
    }
}

function createDirectory($path, $dirname) {
    $fullPath = $path . $dirname;
    if (mkdir($fullPath)) {
        echo "Katalog $fullPath został stworzony.<br>";
    } else {
        echo "Nie udało się stworzyć katalogu $fullPath.<br>";
    }
}

function deleteDirectory($path, $dirname) {
    $fullPath = $path . $dirname;
    if (is_dir($fullPath) && count(scandir($fullPath)) == 2) { // '.' and '..'
        if (rmdir($fullPath)) {
            echo "Katalog $fullPath został usunięty.<br>";
        } else {
            echo "Nie udało się usunąć katalogu $fullPath.<br>";
        }
    } else {
        echo "Katalog $fullPath nie istnieje lub nie jest pusty.<br>";
    }
}

function readDirectory($path, $dirname) {
    $fullPath = $path . $dirname;
    if (is_dir($fullPath)) {
        $elements = scandir($fullPath);
        echo "Zawartość katalogu $fullPath:<br>";
        foreach ($elements as $element) {
            if ($element !== '.' && $element !== '..') {
                echo $element . "<br>";
            }
        }
    } else {
        echo "Katalog $fullPath nie istnieje.<br>";
    }
}
?>
