<!-- Write a PHP script to access and display the capital of a specific country from the associative array created in Exercise 6. -->
<?php

    $cap=array(
        "india"=>"delhi",
        "norway"=>"oslo",
        "france"=>"paris",
        "portugal"=>"lisbon",
        "sweden"=>"stockholm",
    );

    echo $cap["india"];
    echo "<br>";
    echo $cap["sweden"];

?>