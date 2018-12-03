<?php

    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/tpl_edit_profile.php');
    include_once('../templates/common/tpl_side_nav.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../database/db_user.php');
    include_once('../templates/tpl_countries.php'); 
    include_once('../js/dropdown_menu.js'); 
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 
  
    $user_info = getUserInfo($_SESSION['username']);
    $user_reviews=getUserReviews($_SESSION['username']);
    
  
    draw_edit_profile($user_info);
   // draw_footer();



?>