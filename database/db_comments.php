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

?>