<!-- Write a PHP script to create a multidimensional associative array where each key is a city name and the value is an associative array of information (population, area, and country). Display the information for each city. -->
<?php

    $a1=array(
         
        array(
            "city"=>"rajkot",
            "pop"=>100000,
            "ar"=>100,
            "con"=>"india"

        ),

        array(
            "city"=>"ahmedabad",
            "pop"=>564123,
            "ar"=>464,
            "con"=>"india"

        )


    );
    print_r($a1);

?>