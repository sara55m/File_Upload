<?php
session_start();
function delete_func($file,$path){
    unlink($file.$path.$_SESSION["name"]);
    $message["en"]= "File Deleted Successfully";
    $message["ar"]= "تم حذف الملف بنجاح";
    $message['file']= $_SESSION["name"];
}


?>