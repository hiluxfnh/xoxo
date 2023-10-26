<!-- Write a program to find the largest number in a 2d Array -->
<?php
    include "head.php";
?>

<form action="" method="post">
    <label for="2darray">Enter 2D array(Sub Arrays values are seperated by comma, semicolon to seperate sub Arrays): </label>
    <br>
    <input type="text" name="2darray" id="2darray" value=""><br>
    <input type="submit" value="Submit">
</form>

<?php
    if(isset($_POST['2darray'])){
        $input = $_POST['2darray'];

        $subArrays = explode(";",$input);

        $twoDArray=[];

        foreach($subArrays as $subArray){
            $twoDArray[] = array_map('intval',explode(",",$subArray));
        }

        echo "<pre>";
        print_r($twoDArray);
        echo "</pre>";
        $maxvalue = PHP_INT_MIN;
        foreach($twoDArray as $subArr){
            foreach($subArr as $value){
                if($value>$maxvalue){
                    $maxvalue = $value;
                }
            }
        }
        echo "Max value in the 2D array is: ".$maxvalue;
    }
    include "footer.php";
?>