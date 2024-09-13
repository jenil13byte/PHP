<?php
// Task 5 Q2
function calculateDateDifference($date1, $date2) {
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);

    $interval = $datetime1->diff($datetime2);

    $daysDifference = $interval->days;

    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;
    $hours = $interval->h;
    $minutes = $interval->i;
    $seconds = $interval->s;

    echo "Difference in days: $daysDifference days<br>";
    echo "Detailed difference: $years years, $months months, $days days, $hours hours, $minutes minutes, $seconds seconds<br>";
}

$date1 = '2023-01-01 12:00:00';
$date2 = '2024-09-13 15:30:45';

calculateDateDifference($date1, $date2);
?>