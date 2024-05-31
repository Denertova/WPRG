<?php
$cookieName = "pageVisitCount";
if(isset($_COOKIE[$cookieName])) {
    $visitCount = intval($_COOKIE[$cookieName]);
} else {
    $visitCount = 0;
}
$visitCount++;
setcookie($cookieName, $visitCount, time() + (365 * 24 * 60 * 60));

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licznik odwiedzin</title>
</head>
<body>
<h1>Witamy na naszej stronie!</h1>
<p>Liczba odwiedzin: <?php echo $visitCount; ?></p>
</body>
</html>
