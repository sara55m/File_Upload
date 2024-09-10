<?php
session_start();
function delete_func($file,$path){
    unlink($file.$path.$_SESSION["name"]);
}


?>