<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Checking for Vowel</center></h1>
    <form action="" method="post">
        <label>Enter the letter</label>
        <input type="text" name="letter"><br>
        <button type="submit" name="Submit">Submit</button>
        <button type="reset" name="Reset">Reset</button>
    </form>

    <?php
        if(isset($_POST['Submit'])){
            echo checkvowel($_POST['letter']);
        }

        function checkvowel($letter){
            switch($letter){
                case 'a':
                    echo "<br><h3>$letter is a vowel</h3>";
                    break;
                case 'e': 
                    echo "<br><h3>$letter is a vowel</h3>";
                    break;
                case 'i':
                    echo "<br><h3>$letter is a vowel</h3>";
                    break;
                case 'o':
                    echo "<br><h3>$letter is a vowel</h3>";
                    break;
                case 'u':
                    echo "<br><h3>$letter is a vowel</h3>";
                    break;
                default:
                    echo "<br><h3>$letter is not a vowel</h3>";
            }
        }
    ?>
</body>
</html>