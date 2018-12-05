<?php

include_once('../includes/database.php');

/* Function that returns all reviews from a certain user. */

/*function getUserReviews($username){
    try{

        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM Review WHERE username = ?');
        $stmt->execute(array($username));

        return $stmt->fetchAll(); 
    } catch(PDOException $e) {
        return null;
      }
}*/

/* Inserting a film review of a user */

function insertReview($title, $userId, $movieId, $reviewdate, $description){

        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT INTO Review(Title, UserID, MovieID, ReviewDate, Description) VALUES(:Title, :UserID, :MovieID, :ReviewDate, :Description)');
        $stmt->bindParam(':Title', $title);
        $stmt->bindParam(':UserID', $userId);
        $stmt->bindParam(':MovieID', $movieId);
        $stmt->bindParam(':ReviewDate', $reviewdate);
        $stmt->bindParam(':Description', $description);
        $stmt->execute();
      
}

/* Get all items of a certain review */

function getReviewItems($reviewId){
    try{
   
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM Review WHERE ID = ?');
        $stmt->execute(array($reviewId));
        
        return $stmt->fetchAll(); 

    } catch(PDOException $e) {
        return null;
      }
}

function getReviewID($reviewTitle){
    try{
    
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT ID FROM Review WHERE Title = ?');
        $stmt->execute(array($reviewTitle));
        $row= $stmt->fetch();
        return $row['ID'];
    }catch(PDOException $e) {
        return -1;
    }

}

/* Deletes a review */

function deleteReview($reviewId){
    try{
    
        $db = Database::instance()->db();
        $stmt = $db->prepare('DELETE FROM Review WHERE ID = ?');
        $stmt->execute(array($username));
        return true;
    }catch(PDOException $e) {
        return false;
    }
}

function getMovieName($movieId){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT Name FROM Movie WHERE ID = ?');
        $stmt->execute(array($movieId));
        $row= $stmt->fetch();
        $movieName=$row['Name'];
        return $movieName;

    }catch(PDOException $e) {
        return -1;
    }
}

function getNumberComments($reviewId){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT ID FROM Comment WHERE ReviewID = ?');
        $stmt->execute(array($reviewId));
        $row= $stmt->fetchAll();
       
        $numberComments= count($row);
        return $numberComments;

    }catch(PDOException $e) { 
        return -1;
    }
}

function getAllReviews(){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM Review ORDER BY ReviewDate DESC');
        $stmt->execute();
        $allReviews= $stmt->fetchAll();
        return $allReviews;

    }catch(PDOException $e) {
        return -1;
    }
}

function getAllReviewsMovie($movieId){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM Review WHERE MovieID = ?');
        $stmt->execute(array($movieId));
        $allReviews= $stmt->fetchAll();
        return $allReviews;

    }catch(PDOException $e) {
        return -1;
    }
}

function getLikesReview($reviewId){

    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT UserID FROM LikeReview  WHERE ReviewID = ?');
        $stmt->execute(array($reviewId));
        $allLikes= $stmt->fetchAll();
        return count($allLikes);

    }catch(PDOException $e) {
        return -1;
    }

}

function getDisLikesReview($reviewId){

    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT UserID FROM DislikeReview  WHERE ReviewID = ?');
        $stmt->execute(array($reviewId));
        $allDisLikes= $stmt->fetchAll();
        return count($allDisLikes);

    }catch(PDOException $e) {
        return -1;
    }

}
function getUserReview($reviewId) {

    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT UserID FROM Review WHERE ReviewID = ?');
        $stmt->execute(array($reviewId));
        $row= $stmt->fetch();
        return $row['UserID'];

    }catch(PDOException $e) {
        return -1;
    }
}

function getAllReviewsOrderByComments(){
    
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * from Review left join (select count(*) as numberComments, ReviewID from Comment group by ReviewID)m on m.ReviewID=Review.ID ORDER BY numberComments ASC');
    $stmt->execute();
    $allReviews= $stmt->fetchAll();
    
    return $allReviews;

}

function getAllReviewsOrderByLikes(){
    
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * from Review left join (select count(*) as numberLikes, ReviewID from LikeReview group by ReviewID)m on m.ReviewID=Review.ID ORDER BY numberLikes ASC');
    $stmt->execute();
    $allReviews= $stmt->fetchAll();
    
    return $allReviews;

}





















?>