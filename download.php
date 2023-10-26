<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "head.php";
?>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Submit" name="submit">
    </form>

<?php
    include "footer.php";
?>  
</body>
</html>

