<?php

    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/tpl_about.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../templates/common/tpl_nav_bar.php');
    include_once('../templates/tpl_draw_reviews.php');
    include_once('../database/db_reviews.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 

    $user_info = getUserInfo($_SESSION['username']);

    $allMovies=getAllMovies();
    $allReviews=getAllReviews();
    $allMoviesAndReviews = array('movies'=> $allMovies,'reviews'=>$allReviews);
    draw_about($user_info,$allMoviesAndReviews);
?>