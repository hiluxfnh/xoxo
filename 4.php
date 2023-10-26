<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter the letter</label>
        <input type="text" name="let" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $l = $_POST['let'];
        function letterCh($l){
            switch($l){
                case 'a':
                case 'A':
                    echo "The Letter $l is a Vowel";
                    break;
                case 'e':
                case 'E':
                    echo "The Letter $l is a Vowel";
                    break;
                case 'i':
                case 'I':
                    echo "The Letter $l is a Vowel";
                    break;
                case 'o':
                case 'O':
                    echo "The Letter $l is a Vowel";
                    break;
                case 'u':
                case 'U':
                    echo "The Letter $l is a Vowel";
                    break;
                default:
                    echo "The letter $l is not a vowel";
                    break;
            }
        }
        letterCh($l);
    }
?>

</body>
</html>