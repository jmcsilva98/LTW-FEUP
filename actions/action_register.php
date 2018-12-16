<?php
  include_once('../includes/session.php');
  include_once('../database/db_user.php');


  $firstName= htmlspecialchars($_POST['firstName']);
  $lastName=htmlspecialchars($_POST['lastName']);
  $username = htmlspecialchars($_POST['username']);
  $gender=htmlspecialchars($_POST['gender']);
  $birthday=htmlspecialchars($_POST['birthday']);
  $country =htmlspecialchars($_POST['country']);
  $email =htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $confirmpassword=htmlspecialchars($_POST['repeatpassword']);

  if(checkEmail($email)==-1 || checkUser($username)==-1 || $password != $confirmpassword){
    header('Location: ../pages/register.php');
  }
  else{
    insertUser($firstName,$lastName,$username,$gender,$birthday,$country, $email,$password);
    $_SESSION['username'] = $username;
    header('Location: ../pages/profile.php');
  }

?>