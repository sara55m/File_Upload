<?php
require("my_func.php");
if($_POST['delete']){
    echo "<pre/>";
    print_r($_POST);
    echo "<pre/>";
    print_r($_FILES);
    for($i=0;$i<count($_FILES);$i++){
        unlink($_FILES['file'.$i].$path.$name);
    }
    //echo "Deleted Successfully";
}

?>