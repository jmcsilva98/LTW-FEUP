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

if($password == NULL)
      updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password);   
else {
  if( $password == $confirmpassword){
    updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password);   
} else{
$_SESSION['message'] = "ERROR:: The profile update failed";
}
}



  header('Location: ../pages/profile.php');



?>