<?php
    include "head.php";
?>

<form action="request.php?id=5" method="get">
<!-- <form action="request.php?id=5" method="post"> -->
    Name: <input type="text" name="name1"/><br><br>
    Age:<input type="text" name="age"/><br>

    <button type="submit" name="submit">Enter</button>
</form>

<?php
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['name1'], ", your form is submitted";
        echo $_REQUEST['id'], ", is your ID<br>";
        echo "The Associative Array is<br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }
    include "footer.php";
?>