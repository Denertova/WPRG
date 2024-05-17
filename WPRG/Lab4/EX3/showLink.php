<?php
$file = 'links.txt';

if (file_exists($file)) {
    $links = file($file, FILE_IGNORE_NEW_LINES);

    if (count($links) > 0) {
        echo "<ul>";
        foreach ($links as $link) {
            list($url, $description) = explode(';', $link);
            echo "<li><a href=\"$url\">$description</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Brak odnośników.";
    }
} else {
    echo "Brak pliku z odnośnikami.";
}
?>
