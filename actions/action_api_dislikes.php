<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');

header('Content-Type: application/json');

$userName=$_SESSION['username'];
$reviewID= $_POST['reviewID'];
$userID=getID($userName);
if (($j=userLikes($userID,$reviewID))>0) {
  deleteUserLikes($userID,$reviewID);
}
$i=array($userID,$j);
insertUserDislikes($userID,$reviewID);
decrementPoints($userID);
$updatedLikes= getLikesReview($reviewID);
$updatedDislikes =getDislikesReview($reviewID);
$values=array('likes'=>$updatedLikes,'dislikes'=>$updatedDislikes);
echo json_encode($values);

?>