<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = trim($_POST['url']);
    $description = trim($_POST['description']);
    $linkEntry = "$url;$description";

    $file = 'links.txt';
    file_put_contents($file, $linkEntry . PHP_EOL, FILE_APPEND);

    header('Location: index.php');
    exit();
}

