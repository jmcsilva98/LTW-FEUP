<?php

function userLikes($userId,$reviewId){
        try{
            $db = Database::instance()->db();
            $stmt = $db->prepare('SELECT * FROM LikeReview  WHERE ReviewID = ? UserID=?');
            $stmt->execute(array($userId,$reviewId));
            $rows = $stmt->fetch();
            return count($rows);

        }catch(PDOException $e) {
            return -1;
        }
    
    }

 function insertUserLikes($userId,$reviewId){
        try{
            $db = Database::instance()->db();
            $s = $db->prepare('DELETE FROM LikeReview WHERE UserID =? AND ReviewID=?');
            $s->execute(array($userId,$reviewId));
            $stmt = $db->prepare('INSERT INTO LikeReview VALUES(?, ?)');
            $stmt->execute(array($userId,$reviewId));
        }catch(PDOException $e) {
            return -1;
        }
    
    }



?>