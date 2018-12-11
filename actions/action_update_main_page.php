

<?php
include_once('../includes/session.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');
include_once('../database/db_comments.php');
include_once('../database/db_likes.php');

header('Content-Type: application/json');

if(!isset($_POST['orderBy'])){
    $all_reviews=getAllReviewsOrderByComments();
    $i=-1;
    }
    
    else if($_POST['orderBy'] == 0 || $_POST['orderBy']==1){
      $all_reviews=getAllReviews();
        $i=0;
    }
    else if ($_POST['orderBy']==2) {
        $i=1;
        $all_reviews=getAllReviewsOrderByLikes();
    }
    else if ($_POST['orderBy']==3) {
        $i=2;
        $all_reviews =getAllReviewsOrderByComments();
    }
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

    echo json_encode($all_reviews);

    ?>