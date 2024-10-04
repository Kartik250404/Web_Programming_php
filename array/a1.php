<!-- Write a PHP script to create an indexed array of 5 favorite fruits and display each fruit using a foreach loop. -->
<?php

    $fruits=array("apple","banana","mango","pineapple","berry");
    $a1=count($fruits);
    for($a=0; $a<$a1; $a++)
    {
        print_r($fruits[$a]);
        echo "<br>";
    }

?>