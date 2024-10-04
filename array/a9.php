<!-- Write a PHP script to sort the associative array by keys (countries) in ascending order and then by values (capitals) in descending order. Display both sorted arrays -->
<?php

    $cap=array(
        "india"=>"delhi",
        "norway"=>"oslo",
        "france"=>"paris",
        "portugal"=>"lisbon",
        "sweden"=>"stockholm",
    );

    ksort($cap);
    print_r($cap);
    echo "<br>";
    echo "<br>";
    krsort($cap);
    print_r($cap);
?>