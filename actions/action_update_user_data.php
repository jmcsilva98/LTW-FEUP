<?php

include_once('../includes/session.php');
include_once('../database/db_user.php');

$firstName= $_POST['firstName'];
$lastName=$_POST['lastName'];
$new_username = $_POST['username'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$country = $_POST['country'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword=$_POST['repeatpassword'];


if(checkEmail($email)==-1 || checkUser($username)==-1 || $password != $confirmpassword){
    if($firstName != null && $lastName != null && $new_username != null && $gender != null && $birthday != null && $country != null && $email != null && $password != null && $confirmpassword != null){
            if(updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password)){
          //      setUser() FALTA
                
            }else{
            $_SESSION['ERROR'] = "ERROR:: While updating database";
        }

    // header('Location: ../pages/register.php');
  } else{
    $_SESSION['ERROR'] = "ERROR:: None of the parameters can be null";
  }
} else{
    $_SESSION['ERROR'] = "ERROR:: The password ins't right";
  }


  header("Location:".$_SERVER['HTTP_REFERER']."");



?>