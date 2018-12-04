<?php

include_once('../includes/session.php');
include_once('../database/db_user.php');

// $image = imagecreatefromjpeg($_FILES["file_upload"]["tmp_name"]));
// if($image === false){
//     $image = imagecreatefrompng($_FILES["file_upload"]["tmp_name"]);
//     if($image === false)  {
//         $image = imagecreatefromjpg($_FILES["file_upload"]["tmp_name"]);
//             if($image === false){

//             }else{
//                 $type = ".jpg"; 
//             }
//     }else{
//         $type = ".png";
//     }
    
// }
// else
//     $type = ".jpeg";              
 
$image = $_FILES["file_upload"]["tmp_name"];
$dir = "../assets/profilePhotos/";

$image_info = getimagesize($image);

switch ($image_info[2]) {
    case  IMAGETYPE_JPEG:
        $final_image = imagecreatefromjpeg($image);
        break;
    case  IMAGETYPE_PNG:
        $final_image = imagecreatefrompng($image);
        break;
    case  IMAGETYPE_GIF:
        $final_image = imagecreatefromgif($image);
        break;
    case  IMAGETYPE_BMP:
        $final_image = imagecreatefrombmp($image);
        break;
    
    default : 
        die("Unknown filetype");
        break;
}


$file = $dir . getID($_SESSION['username']);


imagejpeg($final_image, $file.".jpg");

header("Location:".$_SERVER['HTTP_REFERER']."");

?>