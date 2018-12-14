<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');

header('Content-Type: application/json');

$userName=$_SESSION['username'];
$reviewID= $_POST['reviewID'];
$userReviewID=$_POST['userID'];
$userID=getID($userName);

if (($j=userLikes($userID,$reviewID))>0) {
  deleteUserLikes($userID,$reviewID);
}
$i=array($userID,$j);
insertUserDislikes($userID,$reviewID);
decrementPoints($userReviewID);
$updatedLikes= getLikesReview($reviewID);
$updatedDislikes =getDislikesReview($reviewID);
$updatedPoints=getUserPoints($userID);
$values=array('likes'=>$updatedLikes,'dislikes'=>$updatedDislikes,'points'=>$updatedPoints);
echo json_encode($values);

?>