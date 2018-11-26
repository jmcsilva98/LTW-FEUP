<?php
  include_once('../includes/session.php');
  include_once('../database/db_user.php');


  $firstName= $_POST['firstName'];
  $lastName=$_POST['lastName'];
  $username = $_POST['username'];
  $gender=$_POST['gender'];
  $birthday=$_POST['birthday'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $password = $_POST['password'];


    insertUser($firstName,$lastName,$username,$gender,$birthday,$country, $email,$password);
    $_SESSION['username'] = $username;
   //header('Location: ../pages/login.php');

?>