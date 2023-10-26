<?php
session_start();
echo "Session ID: ".session_id()."<br>";
echo "Session Name: ".session_name()."<br>";
echo "Session Status: ".session_status()."<br>";
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else{
    $_SESSION['views']=1;
}
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Session</h1>
    <?php
    echo "You have Visited ". $_SESSION['views']." times";
    ?>
    
</body>
</html>