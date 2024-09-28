<?php
function swapNumbers(&$a, &$b) {
   
    echo "Original numbers: a = $a, b = $b<br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b; 
    echo "Swapped numbers: a = $a, b = $b<br>";
}

$a = 10;
$b = 20;
swapNumbers($a, $b);
?>
