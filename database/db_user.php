<?php
  include_once('../includes/database.php');
  /**
   * Verifies if a certain username, password combination
   * exists in the database. Use the sha1 hashing function.
   */
  function checkUserPassword($username, $password) {
    
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM User WHERE Username = ? AND Password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch()?true:false; // return true if a line exists
  }
  function checkEmail($email){
     
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT ID FROM User WHERE Email=?');
     $stmt->execute(array($email));

    $row = $stmt->fetch();
      $id= $row['ID'];
      if ($id==null)
        return 0;
      else return -1;
    
  }

  function checkUser($username){
     
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT ID FROM User WHERE Username=?');
     $stmt->execute(array($username));

    $row = $stmt->fetch();
      $id= $row['ID'];
      if ($id==null)
        return 0;
      else return -1;
    
  }
  function insertUser($firstName,$lastName,$username, $gender,$birthday,$country,$email, $password){
    checkEmail($email);
    $db = Database::instance()->db();
 
    $stmt = $db->prepare('INSERT INTO User(FirstName,LastName,Username,Gender,Birthday,Country,Email,Password,Photo,Points) VALUES (:FirstName,:LastName,:Username,:Gender,:Birthday,:Country,:Email,:Password,:Photo,:Points)');
    $stmt->bindParam(':FirstName', $firstName);
    $stmt->bindParam(':LastName', $lastName);
    $stmt->bindParam(':Username', $username);
    $stmt->bindParam(':Gender', $gender);
    $stmt->bindParam(':Birthday', $birthday);
    $stmt->bindParam(':Country', $country);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':Password', sha1($password)); 
    $photo = "../assets/default.jpg";
    $stmt->bindParam(':Photo', $photo);
    $points=0;
    $stmt->bindParam(':Points',$points); 

     
    if($stmt->execute()){
      $id = getID($username);
      return $id;
    }

  
  }

  function getID($username) {
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT ID FROM User WHERE username = ?');
      $stmt->execute(array($username));
      if($row = $stmt->fetch()){
        return $row['ID'];
      }
    
    }catch(PDOException $e) {
      return -1;
    }
  }



  function getUserInfo($username) {
     
      $db = Database::instance()->db();
      $stmt = $db->prepare('SELECT * FROM User WHERE username = ?');
      $stmt->execute(array($username));
      return  $stmt->fetch();
  }

  function getUserReviews($username){

    $id=getID($username);
    $db = Database::instance()->db();
    $allReviews= $db->prepare('SELECT * FROM Review WHERE UserID = ?');
    $allReviews->execute(array($id));
    $reviews= $allReviews->fetchAll();
    return $reviews;

  }




?>