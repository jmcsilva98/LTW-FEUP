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

die($password . ' - ' . $confirmpassword);
if(checkEmail($email)!=-1 && checkUser($username)!=-1 && $password == $confirmpassword){
    
           updateUserInfo(getID($_SESSION['username']), $firstName, $lastName, $gender, $new_username, $country, $birthday, $email, $password);
           
       
} else{
    $_SESSION['ERROR'] = "ERROR:: The password ins't right";
  }


  header('Location: ../pages/profile.php');



?>