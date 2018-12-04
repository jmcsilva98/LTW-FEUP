<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');

header('Content-Type: application/json');

$userName=$_SESSION['username'];
$reviewID= $_POST['reviewID'];
$userID=getID($userName);
if (userDislikes($userID,$reviewID)>0) {
  deleteUserDislikes($userID,$reviewID);
}
insertUserLikes($userID,$reviewID);
incrementPoints($userID);
$updatedLikes= getLikesReview($reviewID);
$updatedDislikes =getDislikesReview($reviewID);
$reviewUser=getUserReview($reviewID);
$values=array('likes'=>$updatedLikes,'dislikes'=>$updatedDislikes,'user'=>$reviewUser);
echo json_encode($values);

?>