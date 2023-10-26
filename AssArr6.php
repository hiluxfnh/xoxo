<?php
    include "head.php";

    $cars = array("Rolce"=>"Roy", "Benz"=>45, "Student"=>TRUE);
    echo $cars["Rolce"]."<br>";
    print_r($cars);
    var_dump($cars);
?>

<?php
    include "footer.php";
?>