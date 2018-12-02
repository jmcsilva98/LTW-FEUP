<?php


include_once('../includes/session.php');
include_once('../database/db_likes.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');

header('Content-Type: application/json');
if (!isset($_SESSION['username']))
die(json_encode(array('error' => 'not_logged_in')));
$userName=$_SESSION['username'];
$reviewID = $_POST['reviewID'];
$userID=getID($userName);

$ret=insertUserDisLikes($userID,$reviewID);
$updatedDislikes= getDislikesReview($reviewID);
echo json_encode($updatedDislikes);


?>