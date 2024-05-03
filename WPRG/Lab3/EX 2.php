<?php

date_default_timezone_set('Europe/Warsaw');

$current_date = new DateTime();

$end_of_year = new DateTime(date('Y-12-31'));

$days_left = $current_date->diff($end_of_year)->days;

echo "Do końca roku pozostało $days_left dni.";

?>
