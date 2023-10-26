<?php
    include "head.php";
    ?>
    <form action="" method="post">
        <label for="">Enter a value :</label>
        <input type="text" name="num" id="num">

        <button type="submit" name="submit">Add</button>
        <button type="submit" name="print">Print</button>

    </form>

    <?php
    //The program should accept input and then when the add button is clicked it should add to the list, when print button clicked it should display
    //the list of all the values entered.

    $var=$_POST['num'];
    $arr=array();
    if(isset($_POST['submit'])){
        array_push($arr,$var);
    }
    if(isset($_POST['print'])){
        foreach($arr as $value){
            echo $value;
        }
    }
    

        ?>

    <?php
        include "footer.php";
        ?>