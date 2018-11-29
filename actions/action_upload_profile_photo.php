<?php

include_once('../includes/session.php');
include_once('../database/db_user.php');

// Directory path to where the photos should be uploaded
$dir = "../assets/profilePhotos/";
$name = basename($_FILES["file_upload"]["name"]);

$image_type = pathinfo($name,PATHINFO_EXTENSION);
$file = $dir . getID($_SESSION['username']) . "." . $image_type;
$upload_working = 1;


if(!($image_type == "jpg" && $image_type == "jpeg" && $image_type == "png")){
   
    $_SESSION['ERROR'] = "ERROR:: The file format isn't allowed, you can only upload JPG, PNG and JPEG files.";
    $upload_working = 0;
}

if(file_exists($file)) unlink($file);

if($upload_working){
    if(move_uploaded_file($file["file_upload"]["photo_name"], $file)){
        if(updateUserPhoto($_SESSION['username'], getID($_SESSION['username']) . "." . $image_type) == null){
            $_SESSION['ERROR'] = "ERROR:: Error while uploading photo";
             $upload_working = 0;
        }
    }else{
            $_SESSION['ERROR'] = "ERROR:: Error while uploading photo";
            $upload_working = 0;
        }

}else{
    $_SESSION['ERROR'] = "ERROR:: Error while uploading photo";
}

    header("Location:".$_SERVER['HTTP_REFERER']."");

?>