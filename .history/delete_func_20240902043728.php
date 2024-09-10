<?php
session_start();
if($_POST['delete']){
    for($x;$x<$_SESSION['count'];$x++){
        unlink($_SESSION['path'].$_SESSION['name']);
    }
}

?>