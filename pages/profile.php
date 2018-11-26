<?php

    include_once('../includes/session.php');
    include_once('../templates/tpl_profile.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 
  
    $user_info = getUserInfo($_SESSION['username']);
    $user_reviews=getUserReviews($_SESSION['username']);
    
   // print_r($user_reviews);
    draw_profile($user_info);
    draw_reviews($user_reviews);


?>