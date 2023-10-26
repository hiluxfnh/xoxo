<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $n=$_POST['num'];
            function series($n){
                if($n==0){
                    return 0;
                }
                elseif($n==1){
                    return 1;
                }
                else{
                    return (series($n-1)+series($n-2));
                }
            }
            for($i=0; $i<$n; $i++){
                echo series($i)."<br>";
            }
        }
    ?>
</body>
</html>