<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $n = $_POST["num"];
            function fact($n){
                if($n==0 || $n==1){
                    if($n==0){
                        echo "The Factorial of $n is 1";
                    }
                    else{
                        echo "The Factorial of $n is 1";
                    }
                }
                else {
                    $f=1;
                    for($i=1; $i<=$n; $i++){
                        $f=$f*$i;
                    }
                    echo "The factorial of $n is $f";
                }
            }
            fact($n);
        }
    ?>
</body>
</html>