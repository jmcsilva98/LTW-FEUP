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



?>