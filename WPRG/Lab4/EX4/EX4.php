<?php
$allowedIpsFile = 'allowed_ips.txt';

if (!file_exists($allowedIpsFile)) {
    file_put_contents($allowedIpsFile, '');
}

$allowedIps = file($allowedIpsFile, FILE_IGNORE_NEW_LINES);
$userIp = $_SERVER['REMOTE_ADDR'];

if (in_array($userIp, $allowedIps)) {
    include 'specialPage.php';
} else {
    include 'defaultPage.php';
}
?>
