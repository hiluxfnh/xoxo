<?php
echo "<h1>Session Example</h1>";

session_start();
echo "The session ID is: ". session_id();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>The page has been accessed :
        <?php
        echo $_SESSION['counter']
        ?>
    </h2>

</body>

</html>