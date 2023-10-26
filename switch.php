<!DOCTYPE html>
<html>

<body>

    <?php
    $b = 0;
    echo 'Hello everyone', 'you as well', $b;

    switch ($b) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>

</body>

</html>