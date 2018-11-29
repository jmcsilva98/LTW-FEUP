<?php
  include_once('../includes/session.php');
  include_once('../database/db_user.php');

  $username = $_SESSION['username'];
  echo $username;
  if( $username != null) {
    if(deleteAccount($username)) {
        unset($_SESSION['username']);
        $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Your account has been removed!');
        header("Location:../pages/login.php");
    }
    else {
        $_SESSION['ERROR'] = "Error deleting your user account!";
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
  }

?>