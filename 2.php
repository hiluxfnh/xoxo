<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a Number:</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $n=$_POST['num'];
            $flag =0;
            for($i=2; $i<$n; $i++){
                if($n%$i==0){
                    $flag=1;
                    break;
                }
            }
            if($flag==0){
                echo "The number $n is a Prime number";
            }
            else{
                echo "The number $n is not prime.";
            }
        }
    ?>
</body>
</html>