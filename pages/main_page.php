<?php

    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/tpl_draw_reviews.php');
    include_once('../templates/tpl_main_page.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../templates/common/tpl_nav_bar.php');
    include_once('../database/db_reviews.php');
    include_once('../database/db_comments.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 

    $user_info = getUserInfo($_SESSION['username']);
    $all_reviews=getAllReviewsOrderByLikes();
    foreach ($all_reviews as $k => $review){
        $all_reviews[$k]['MovieName'] = getMovieName($review['MovieID']);
        $all_reviews[$k]['UserName'] = getUsername($review['UserID']);
        $all_reviews[$k]['NumberComments']=getNumberComments($review['ID'],$review['UserID']);
        $all_reviews[$k]['Heart'] = getLikesReview($review['ID']);
        $all_reviews[$k]['Dislike'] = getDisLikesReview($review['ID']);
        $all_reviews[$k]['Comments']=getCommentsReview($review['ID']);
        foreach($all_reviews[$k]['Comments'] as $j => $comment){
            $all_reviews[$k]['Comments'][$j]['Username']=getUsername($comment['UserID']);
            $all_reviews[$k]['Comments'][$j]['Likes']=getLikesComment($comment['ID']);
            $all_reviews[$k]['Comments'][$j]['Dislikes']=getDislikesComment($comment['ID']);
        }
        
    }
    // draw_reviews($all_reviews);
    // draw_footer();
    draw_feed($user_info,$all_reviews);
?>