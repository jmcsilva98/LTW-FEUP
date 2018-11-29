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
        $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Can\'t remove your account!');
       //adicionar página de erro geral(do genero de ERROR 404)
    }
  }

?>