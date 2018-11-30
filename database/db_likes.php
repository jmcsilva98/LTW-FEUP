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



?>