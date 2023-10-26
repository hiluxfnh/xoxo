<?php
    include "head.php";

    $cars=array("Hondacity","CRV",23);
    echo "<h2>Printing the type and length of the array"."<br>"."</h2>";
    echo var_dump($cars),"<br><br>";
    echo "<h2>Printing the arrays using print_r statements</h2>";
    print_r($cars);

    // $cars=array("I10","I20","Santro");
    echo "<br><h2>Printing the elements using the looping structure</h2>";
    for($i=0; $i<count($cars); $i++){
        echo $cars[$i]."<br>";
    }
    
    ?>

