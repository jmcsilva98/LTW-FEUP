<?php

    include_once('../includes/session.php');
    include_once('../templates/tpl_profile.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 
  
    $user_info = getUserInfo($_SESSION['username']);
    
    draw_profile($user_info);

?>