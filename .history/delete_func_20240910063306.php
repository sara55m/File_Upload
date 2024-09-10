<?php
require("firm2.php");
if($_POST['delete']){
    unlink($_SESSION['name']);
    session_unset();
    session_destroy();
    //echo "Deleted Successfully";
}

?>