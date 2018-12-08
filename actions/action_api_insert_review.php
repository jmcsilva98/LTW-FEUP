<?php


include_once('../includes/session.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');
include_once('../database/db_movies.php');

header('Content-Type: application/json');

$username=$_SESSION['username'];

$movieName = $_POST['movie'];
$movieId= getMovieID($movieName);
$description = $_POST['description'];
$title = $_POST['title'];
$userID = getID($username);
$reviewdate = date("Y-m-d");
if($title != null && $description != null)
    insertReview($title, $userID, $movieId, $reviewdate, $description);
$allReviews = getAllReviews($movieId);
echo json_encode($allReviews);



?>