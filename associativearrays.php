<?php
    include "head.php";

    //Demonstration of Associative Arrays
    $cars=array("hondacity","CRV","Jeep");
    print_r($cars);
    echo "<br>";
    echo "<br>After changing the index<br>";
    $cars=array("Hondacity"=>17.7,"CRV"=>10.3,"Jeep"=>13.3);
    var_dump($cars);
    echo "<br> <br>";

    foreach ($cars as $key => $value) {
        echo "My $key has $value kilometer(s) milege<br>";
    }

    echo "<br><h1 align=center>Multi Dimensional arrays</h1><br>";
    $cars=array(array("city",22,18),
                array("CRV",10,8),
                array("Jeep",13,9));
    echo $cars[0][0].": In city ".$cars[0][1]." and on highway ".$cars[0][2]."<br>";
    echo $cars[1][0].": In city ".$cars[1][1]." and on highway ".$cars[1][2]."<br>";
    echo $cars[2][0].": In city ".$cars[2][1]." and on highway ".$cars[2][2]."<br><br>";
    ?>

    <form action="" method="post">
        <label>Enter the Values:</label>
        <input type="text" name="val"><br>
        <button type="submit" name="submit">Add</button>
        <button type="submit" name="display">Display</button>
    </form>

<?php 
    $arr=array();
    // 
    if (isset($_POST['add'])){
        $value=$_POST['val'];
        array_push($arr, $value);
    }
    if(isset($_POST['display'])){
        foreach($arr as $value){
            echo "$value";
        }
    }
    include "footer.php";
    ?>