<?php

include_once('../includes/database.php');



function getCommentsReview($reviewId)
{
  $db = Database::instance()->db();
  $stmt = $db->prepare('SELECT * FROM Comment WHERE ReviewID = ?');
  $stmt->execute(array($reviewId));
  $allReviews= $stmt->fetchAll();
  return $allReviews;
}

function getLikesComment($commentId)
{
  $db = Database::instance()->db();
  $stmt = $db->prepare('SELECT * FROM LikeComment WHERE CommentID = ?');
  $stmt->execute(array($commentId));
  $allLikes = $stmt->fetchAll();
  return count($allLikes);
}

function getDislikesComment($commentId)
{
  $db = Database::instance()->db();
  $stmt = $db->prepare('SELECT * FROM DislikeComment WHERE CommentID = ?');
  $stmt->execute(array($commentId));
  $allLikes = $stmt->fetchAll();
  return count($allLikes);
}

function  insertComment($userID,$commentdate,$reviewID, $description){
  $db = Database::instance()->db();
  $stmt = $db->prepare('INSERT INTO Comment(UserID, CommentDate,ReviewID, Description) VALUES(:UserID,:CommentDate,:ReviewID,:Description)');
  $stmt->bindParam(':UserID', $userID);
  $stmt->bindParam(':CommentDate', $commentdate);
  $stmt->bindParam(':ReviewID', $reviewID);
  $stmt->bindParam(':Description', $description);
  $stmt->execute();
}



?>