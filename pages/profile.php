<?php

    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/common/tpl_side_nav.php');
    include_once('../templates/tpl_profile.php');
    include_once('../templates/tpl_draw_reviews.php');
    include_once('../templates/common/tpl_footer.php');
   
    include_once('../database/db_user.php');
    include_once('../database/db_reviews.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 
    if (isset($_GET['username'])){
        $username=$_GET['username'];
    }
    else {
        $username=$_SESSION['username'];
    }
    $user_info = getUserInfo($username);
    $user_reviews=getUserReviews($username);
    
    foreach ($user_reviews as $k => $review){
        
        $user_reviews[$k]['MovieName'] = getMovieName($review['MovieID']);
        $user_reviews[$k]['UserName'] = $user_info['Username'];
        $user_reviews[$k]['NumberComments'] = getReviewsComments($review['ID'],$review['UserID']);
        $user_reviews[$k]['Heart'] = getLikesReview($review['ID']);
        $user_reviews[$k]['Dislike'] = getDisLikesReview($review['ID']);
        
    }

    draw_profile($user_info,$user_reviews);
    //draw_reviews($user_reviews);
    //draw_review();
    // draw_footer();



?>