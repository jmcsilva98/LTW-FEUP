<?php
  include_once('../includes/database.php');
  /**
   * Verifies if a certain username, password combination
   * exists in the database. Use the sha1 hashing function.
   */
  function checkUserPassword($username, $password) {
    
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch()?true:false; // return true if a line exists
  }
  function insertUser($username, $firstName, $lastName, $username, $gender, $birthday, $country, $email, $password, $photo) {
    
    try{
    $db = Database::instance()->db();
    $stmt->execute(array($username, sha1($password)));
    $stmt = $dbh->prepare('INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo) VALUES (:FirstName, :LastName, :Username, :Gender, :Birthday, :Country, :Email, :Password, :Photo)');
      $stmt->bindParam(':FirstName', $firstName);
      $stmt->bindParam(':LastName', $lastName);
      $stmt->bindParam(':Username', $username);
      $stmt->bindParam(':Gender', $gender);
      $stmt->bindParam(':Birthday', $birthday);
      $stmt->bindParam(':Country', $country);
      $stmt->bindParam(':Email', $email);
      $stmt->bindParam(':Password', sha1($password));
      $stmt->bindParam(':Photo', $photo);
      if($stmt->execute()){
        $id = getID($username);
        return $id;
      }
      else return -1;
    }catch(PDOException $e);
  	  return -1;
  }

  function getID($username){
    try {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT ID FROM user WHERE username = ?');
    $stmt->execute(array($username);
    return $stmt->fetch();

  } catch(PDOException $e) {
    return null;
  }
}

function deleteUser($username) {
  try {
    $db = Database::instance()->db();
    $stmt = $dbh->prepare('DELETE FROM User WHERE Username = ?');
    $stmt->execute(array($username));
    return true;
  }
  catch(PDOException $e) {
    return false;
  }
}

?>