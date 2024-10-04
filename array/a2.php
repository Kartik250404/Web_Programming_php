<!-- Write a PHP script to add two more fruits to the array from Exercise 1 and remove the first fruit. Display the modified array using print_r(). -->
<?php

    $fruits=array("apple","banana","mango","pineapple","berry");

    $fruits[5] = "kiwi";
    $fruits[6] = "lemon";

    array_splice($fruits,0,1);

    print_r($fruits);
?>