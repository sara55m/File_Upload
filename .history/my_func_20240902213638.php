<?php
//$file=$_FILES["file"]
function my_func($file,$size,$exts,$path,$lang){
    $ext=explode(".",$file["name"]);
    $ext=end($ext);
    $ext=strtolower($ext);
    $size_limit=$size*1024;
    if($file['size']<=$size_limit){
        if(in_array($ext,$exts)){
            if(file_exists($path)){
                $name=time().".".$ext;
                move_uploaded_file($file["tmp_name"],$path.$name);
                $message["en"]= "File Uploaded Successfully";
                $message["ar"]= "تم رفع الملف بنجاح";
                $message['file']= $name;
                $_SESSION['path']=$path;
                $_SESSION['name']=$name;

            }else{
                $message["en"]="Upload folder not found";
                $message["ar"]="المجلد غير موجود";
            }
        }else{
            $message["en"]="This file extension is not supported";
            $message["ar"]="هذا الامتداد غير مدعوم";
        }
    }else{
        $message["en"]="This file is too big";
        $message["ar"]="اللمف كبير للغاية";
    }
    return $message;
}
?>