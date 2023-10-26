<?php
    include "head.php";
?>
<form action="" method="post">
    <label for="">Enter a:</label>
    <input type="text" name="a"><br>
    <label for="">Enter b:</label>
    <input type="text" name="b"><br>
    <label for="">Enter c:</label>
    <input type="text" name="c"><br>
    <br>
    <input type="Submit" name="submit">
</form>
<?php

     if (isset($_POST['submit'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

        function greatest($a, $b, $c){
            if($a > $b && $a > $c){
                echo "$a is larger than $b and $c";
            }
            else if($b > $a && $b > $c){
                echo "$b is larger than $a and $c";
            }
            else{
                echo "$c is larger than $b and $a";
            }
         }
         greatest ($a,$b,$c);
    } 
    
    include "footer.php";
    ?>