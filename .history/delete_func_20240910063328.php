<?php
require("my_func.php");
if($_POST['delete']){
    unlink($_SESSION['name']);
    session_unset();
    session_destroy();
    //echo "Deleted Successfully";
}

?>