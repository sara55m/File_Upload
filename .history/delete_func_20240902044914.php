<?php
session_start();
if($_POST['delete']){
    
    echo "<pre/>";
    print_r($_SESSION);
    for($i=0;$i<$_SESSION['count'];$i++){
        unlink($_SESSION['name']);
    }
    session_unset();
    session_destroy();
}

?>