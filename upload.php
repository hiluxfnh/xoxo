<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $name=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    $tmploc=$_FILES['file']['tmp_name'];
    $error=$_FILES['file']['error'];
    $size=$_FILES['file']['size'];
    
    $tempext=explode('.',$name);

    $fileext=strtolower(end($tempext));
    $isallow=array('pdf','png','jpg');
    if(in_array($fileext,$isallow)){
        if($error===0){
            if($size<=2000000){
                $newfilename=uniqid('',true).".".$fileext;
                move_uploaded_file($tmploc,$newfilename);
                echo "The file uploaded succesfully";
            }
            else{
                echo "Sorrry, file size it too big";}
        }
        else{
            echo "error occured";}
    }
    else{
        echo "The type of file cannot be uploaded";}
}
?>
</body>
</html>