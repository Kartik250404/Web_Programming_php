<?php
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}

$testYear = 2023;

if (isLeapYear($testYear)) {
    echo "$testYear is a leap year.";
} else {
    echo "$testYear is not a leap year.";
}
?>