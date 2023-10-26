<?php
    include "head.php";
?>
<form action="" method="post">
    <label for="">Enter a number to cheeck if prime:</label>
    <input type="text" name="num" id="">
    <input type="submit" value="Submit" name="submit">
</form>
<?php

if(isset($_POST['submit'])){
    $num=$_POST['num'];
    $flag=0;
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            $flag=1;
            break;
        }
    }
    if($flag==0){
        echo "$num is a Prime Number";
    }
    else{
        echo "$num is Not Prime Number";
    }
}
    include "footer.php";
?>