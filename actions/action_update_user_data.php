<?php

include_once('../includes/session.php');
include_once('../database/db_user.php');

$firstName = htmlspecialchars($_POST['firstName']);
$lastName =htmlspecialchars($_POST['lastName']);
$new_username = htmlspecialchars($_POST['username']);
$gender = htmlspecialchars($_POST['gender']);
$birthday = htmlspecialchars($_POST['birthday']);
$country = htmlspecialchars($_POST['country']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$confirmpassword = htmlspecialchars($_POST['repeatpassword']);

if($password == NULL)
      updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password);   
else {
  if( $password == $confirmpassword){
    updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password);   
} else{
   die( header('Location: ../pages/edit_profile.php'));
}
}



  header('Location: ../pages/profile.php');



?>