<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="file0">
<input type="hidden" name="hd" value='upload'>
<input type="submit" name="submit" value="Upload">
</form>



<?php

require("my_func.php");

echo "<pre/>";

print_r($GLOBALS);
if($_POST){
    echo "<pre/>";
    print_r($_FILES);
    $mes=my_func($_FILES['file'],3000,["png","gif","jpg","jpeg"],"uploads2/",$_GET['lang']);
    echo $mes[$_GET['lang']]."  ".$mes['file']."<br>";
    }
    

    ?>
    <form action="delete_func.php" method="post">
    <input type="submit" name="delete" value="DELETE">
    </form>


</body>
</html>

