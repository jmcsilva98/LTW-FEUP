<?php

    include_once('../includes/session.php');
    include_once('../templates/tpl_review.php');
    include_once('../templates/tpl_profile.php');
    include_once('../templates/common/tpl_footer.php');
   
    include_once('../database/db_user.php');
    include_once('../database/db_reviews.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 
  
    $user_info = getUserInfo($_SESSION['username']);
    print_r($user_info);
    $user_reviews=getUserReviews($_SESSION['username']);
    
    draw_profile($user_info,$user_reviews);
    foreach ($user_reviews as $k => $review){
        
        $user_reviews[$k]['MovieName'] = getMovieName($review['MovieID']);
        $user_reviews[$k]['UserName'] = $user_info['Username'];
        $user_reviews[$k]['NumberComments'] = getReviewsComments($review['ID'],$review['UserID']);
        $user_reviews[$k]['Heart'] = getLikesReview($review['ID']);
        $user_reviews[$k]['Dislike'] = getDisLikesReview($review['ID']);
        
    }
    draw_reviews($user_reviews);
    //draw_review();
  //  draw_footer();



?>