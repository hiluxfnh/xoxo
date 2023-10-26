<?php
    include "head.php";
    echo "<br>";

    ?>
    <form action="" method="post">
    <label for="">Enter a number to get the factorial:</label>
    <input type="text" name="a"><br>
    <input type="Submit" name="Submit">
    </form>

<?php
    if (isset($_POST['Submit'])){
        $a=$_POST['a'];

        function fact($a){
            if ($a==0 || $a==1) {
                echo "The factorial is 1";
            }
            else{
                $f=1;
                for ($i=1; $i<=$a; $i++){
                    $f=$f*$i;
                }
                echo "The Factorial of $a is $f";
            }
        }

        fact($a);
    }


    include "footer.php";
?>