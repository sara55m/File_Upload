<?php
if($_POST['delete']){
    echo "<pre/>";
    print_r($_POST);
    echo "<pre/>";
    print_r($_FILES);
    for($i=0;$i<$_SESSION['count'];$i++){
        unlink($_SESSION["name"]);
    }
    //echo "Deleted Successfully";
}

?>