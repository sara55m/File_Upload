<?php
session_start();
if($_POST['delete']){
    session_unset();
    session_destroy();
    //echo "<pre/>";
    //print_r($_SESSION);
    //for($x;$x<$_SESSION['count'];$x++){
      //  unlink($_SESSION['path'].$_SESSION['name']);
    //}
}

?>