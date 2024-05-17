<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['fileToUpload']['name']);

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)) {
        $lines = file($uploadFile, FILE_IGNORE_NEW_LINES);
        $reversedLines = array_reverse($lines);

        $reversedFile = $uploadDir . 'reversed_' . basename($_FILES['fileToUpload']['name']);
        file_put_contents($reversedFile, implode(PHP_EOL, $reversedLines));

        echo "Odwrócone wiersze zapisane w: " . $reversedFile;
    } else {
        echo "Błąd w przesyłaniu pliku.";
    }
}
?>
