<?php
require("my_func.php");
if($_POST['delete']){
    //echo $_SESSION['name'];
    if(unlink($_SESSION['name'])){
        echo "File Deleted Successfully";
    }
    session_unset();
    session_destroy();
    
}

?>