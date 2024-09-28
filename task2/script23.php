<?php
$num1 = 50;
$num2 = 20;
$num3 = 40;

$largest = ($num1 > $num2) 
    ? ($num1 > $num3 ? $num1 : $num3) 
    : ($num2 > $num3 ? $num2 : $num3);

echo "Largest Number: $largest";

?>
