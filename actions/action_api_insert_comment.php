<?php


include_once('../includes/session.php');
include_once('../database/db_user.php');
include_once('../database/db_reviews.php');
include_once('../database/db_comments.php');

header('Content-Type: application/json');

$username=$_SESSION['username'];

$reviewID = $_POST['reviewID'];
$description = $_POST['description'];
$userID = getID($username);
$commentdate = date("Y-m-d");
if($description != null){
    insertComment($userID,$commentdate,$reviewID, $description);
    
}
echo json_encode($userID);


?>