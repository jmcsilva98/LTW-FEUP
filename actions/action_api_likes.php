<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');

header('Content-Type: application/json');
if (!isset($_SESSION['username']))
die(json_encode(array('error' => 'not_logged_in')));
$userName=$_SESSION['username'];
$reviewName= $_POST['reviewName'];
$userID=getID($userName);

$reviewID=getReviewID($reviewName);
$ret=insertUserLikes($userID,$reviewID);
$updatedLikes= getLikesReview($reviewID);
echo json_encode($reviewID);




?>