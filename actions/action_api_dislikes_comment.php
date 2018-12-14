<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_comments.php');

header('Content-Type: application/json');

$userName=$_SESSION['username'];
$commentID= $_POST['commentID'];
$userCommentID=$_POST['userID'];
$userID=getID($userName);
if (userLikesComment($userID,$commentID)>0) {
  deleteUserLikeComment($userID,$commentID);
}
insertUserDislikeComment($userID,$commentID);
decrementPoints($userCommentID);
$updatedLikes= getLikesComment($commentID);
$updatedDislikes =getDislikesComment($commentID);
$updatedPoints = getUserPoints($userID);
$values=array('likes'=>$updatedLikes,'dislikes'=>$updatedDislikes,'points'=>$updatedPoints);
echo json_encode($values);

?>