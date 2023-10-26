<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>
</head>
<body>
    <?php
        include "head.php";
        echo "<br><br>";
    ?>

    <h1><center>PHP Prime Numbers Checker</center></h1><br>
    <form action="" method="post">
        <label for="num">Enter a number: </label>
        <input type="number" name="num" id="num"><br>
        <button type="Submit" name="Submit">Submit</button>
        <button type="Reset" name="Reset">Reset</button>
    </form>

    <?php
        function checkprime($num){
            $flag = 0;
            for($i=2; $i<$num; $i++){
                if($num%$i==0){
                    $flag = 1;
                    break;
                }
            }
            if($flag==0){
                echo "<br><h3>$num is a Prime Number</h3>";
            }
            else{
                echo "<br><h3>$num is not a Prime Number</h3>";
            }
        }
        
    ?>
    <?php
        if(isset($_POST['Submit'])){
            echo checkprime($_POST['num']);
        }
        echo "<br><br>";

        include "footer.php";
    ?>
</body>
</html>