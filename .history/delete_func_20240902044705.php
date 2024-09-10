<?php
session_start();
if($_POST['delete']){
    
    echo "<pre/>";
    print_r($_SESSION);
    for($x;$x<$_SESSION['count'];$x++){
        unlink($_SESSION['name']);
    }
    session_unset();
    session_destroy();
}

?>