<?php
if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $birthDate = new DateTime($birthdate);
    $now = new DateTime();

    function getDayOfWeek($date) {
        $daysOfWeek = ['niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota'];
        return $daysOfWeek[$date->format('w')];
    }

    function getAge($birthDate, $now) {
        $age = $now->diff($birthDate)->y;
        return $age;
    }

    function daysToNextBirthday($birthDate, $now) {
        $currentYearBirthday = new DateTime($now->format('Y') . '-' . $birthDate->format('m') . '-' . $birthDate->format('d'));
        if ($currentYearBirthday < $now) {
            $currentYearBirthday->modify('+1 year');
        }
        $days = $now->diff($currentYearBirthday)->days;
        return $days;
    }

    $dayOfWeek = getDayOfWeek($birthDate);
    $age = getAge($birthDate, $now);
    $daysToBirthday = daysToNextBirthday($birthDate, $now);

    echo "Urodziłeś się w: $dayOfWeek<br>";
    echo "Masz ukończone: $age lat<br>";
    echo "Do najbliższych urodzin zostało: $daysToBirthday dni<br>";
}
?>
