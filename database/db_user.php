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

  function insertUser($firstName,$lastName,$username, $gender,$birthday,$country,$email, $password){
  
    $db = Database::instance()->db();
 
    $stmt = $db->prepare('INSERT INTO User(FirstName,LastName,Username,Gender,Birthday,Country,Email,Password) VALUES (:FirstName,:LastName,:Username,:Gender,:Birthday,:Country,:Email,:Password)');
    $stmt->bindParam(':FirstName', $firstName);
    $stmt->bindParam(':LastName', $lastName);
    $stmt->bindParam(':Username', $username);
    $stmt->bindParam(':Gender', $gender);
    $stmt->bindParam(':Birthday', $birthday);
    $stmt->bindParam(':Country', $country);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':Password', sha1($password)); 
     
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
?>