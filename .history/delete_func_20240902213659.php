<?php
if($_POST['delete']){
    for($i=0;$i<count($_FILES);$i++){
        unlink($_FILES['file'.$i].$path.$name);
    }
}

?>