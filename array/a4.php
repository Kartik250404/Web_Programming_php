<!-- Write a PHP script to sort the array of fruits in ascending and descending order, and display both sorted arrays. -->

<?php

    $fruits=array("apple","banana","mango","pineapple","berry");
    sort($fruits);
    print_r($fruits);
    echo "<br>";
    rsort($fruits);
    print_r($fruits);

?>