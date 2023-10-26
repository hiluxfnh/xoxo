<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Associative array</title>
        <h1 align="center">Associative Arrays</h1>
    </head>
    <body>
        <?php
            $cars=array("Hondacity"=>17.7, "CRV"=>10.3, "Jeep"=>13.3);
            var_dump($cars);
            echo "<br><br>";
            echo "<br><h3>Printing the values using for each statements</h3><br>";
            foreach($cars as $key => $value){
                echo "My $key has $value kilometer(s) milege<br>";
            }
        ?>
    </body>
</html>