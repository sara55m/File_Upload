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
<input type="file" name="file1">
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
    for($i=0;$i<count($_FILES);$i++){
    $mes=my_func($_FILES['file'.$i],3000,["png","gif","jpg","jpeg"],"uploads2/",$_GET['lang']);
    echo $mes[$_GET['lang']]."  ".$mes['file']."<br>";
    sleep(1);
    }
    
}

    ?>
<form action="delete_func.php" method="post">
<input type="submit" name="delete" value="Delete">
</form>

<?php

require("delete_func.php");
    for($i=0;$i<count($_FILES);$i++){
    $del=delete_func($_FILES['file'.$i],"uploads2/",$_GET['lang']);
    echo $del[$_GET['lang']]."  ".$del['file']."<br>";
    sleep(1);
    }
    

</body>
</html>

