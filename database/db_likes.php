<?php

function userLikes($userId,$reviewId){
        try{
            $db = Database::instance()->db();
            $stmt = $db->prepare('SELECT * FROM LikeReview  WHERE UserID = ? AND ReviewID=?');
            $stmt->execute(array($userId,$reviewId));
            $rows = $stmt->fetchaLL();
            return count($rows);

        }catch(PDOException $e) {
            return -1;
        }
    
    }

    function userDislikes($userId,$reviewId){
        try{
            $db = Database::instance()->db();
            $stmt = $db->prepare('SELECT * FROM DislikeReview  WHERE UserID = ? AND ReviewID=?');
            $stmt->execute(array($userId,$reviewId));
            $rows = $stmt->fetchAll();
            return count($rows);

        }catch(PDOException $e) {
            return -1;
        }
    
    }

 function insertUserLikes($userId,$reviewId){

            $db = Database::instance()->db();
            $stmt = $db->prepare('INSERT OR REPLACE INTO LikeReview VALUES(?, ?)');
            $stmt->execute(array($userId,$reviewId));
    
    }
function deleteUserLikes($userId,$reviewId){

        $db = Database::instance()->db();
        $stmt = $db->prepare('DELETE FROM LikeReview WHERE UserID = ? AND ReviewID = ?');
        $stmt->execute(array($userId,$reviewId));

}

 function insertUserDislikes($userId,$reviewId){
   

        $db = Database::instance()->db();
        $stmt = $db->prepare('INSERT OR REPLACE INTO DislikeReview VALUES(?, ?)');
        $stmt->execute(array($userId,$reviewId));

}
function deleteUserDislikes($userId,$reviewId){

    $db = Database::instance()->db();
    $stmt = $db->prepare('DELETE FROM DislikeReview WHERE UserID = ? AND ReviewID = ?');
    $stmt->execute(array($userId,$reviewId));

}

function userLikesComment($userId,$commentId){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM LikeComment WHERE UserID = ? AND CommentID=?');
        $stmt->execute(array($userId,$commentId));
        $rows = $stmt->fetchaLL();
        return count($rows);

    }catch(PDOException $e) {
        return -1;
    }

}
function userDislikesComment($userId,$commentId){
    try{
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM DislikeComment WHERE UserID = ? AND CommentID=?');
        $stmt->execute(array($userId,$commentId));
        $rows = $stmt->fetchaLL();
        return count($rows);

    }catch(PDOException $e) {
        return -1;
    }
}
function insertUserLikeComment($userId,$commentId){

    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT OR REPLACE INTO LikeComment VALUES(?, ?)');
    $stmt->execute(array($userId,$commentId));

}
function deleteUserLikeComment($userId,$commentId){

$db = Database::instance()->db();
$stmt = $db->prepare('DELETE FROM LikeComment WHERE UserID = ? AND CommentID = ?');
$stmt->execute(array($userId,$commentId));


}

function insertUserDislikeComment($userId,$commentId){

    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT OR REPLACE INTO DislikeComment VALUES(?, ?)');
    $stmt->execute(array($userId,$commentId));

}
function deleteUserDislikeComment($userId,$commentId){

$db = Database::instance()->db();
$stmt = $db->prepare('DELETE FROM DislikeComment WHERE UserID = ? AND CommentID = ?');
$stmt->execute(array($userId,$commentId));


}



?>