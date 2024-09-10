<?php
session_start();
if($_POST['delete']){
    unlink($_SESSION['name']);
    session_unset();
    session_destroy();
    //echo "Deleted Successfully";
}

?>