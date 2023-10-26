<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'head.php';

        echo "<br><h1>Adding elements to a 2D Array</h1><br>";
        $newarray = array();
        for($i=0; $i<3; $i++) {
            $newarray[$i]=array();
            for($j=0; $j<3; $j++) {
                $newarray[$i][$j] = rand(1,20);
            }
        }

        for($i=0; $i<count($newarray); $i++) {
            for($j=0; $j<count($newarray[$i]); $j++) {
                echo $newarray[$i][$j]. "**";
            }
            echo "<br><br>";
        }

        include 'footer.php';
    ?>
</body>
</html>