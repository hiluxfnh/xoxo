<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>
    <h1>Quotes and Data Type</h1>
    <?php
    $name = "Jay";
    $reg = 1234;
    echo "Hello $name<br>"; //will print Hello Jay
    echo 'Hello $name<br>'; //will print Hello $name
    print "Hello $name<br>"; //will print Hello Jay
    print 'Hello '.$name.' Your registration No. is'.$reg.'<br> <br>'; //will print Hello Jay Your registration No. is 1234 with . used for concatenation

    echo "Data type: ", var_dump($name);
    echo "<br>";
    echo "Data type: ", var_dump($reg);
    ?>
</body>
</html>