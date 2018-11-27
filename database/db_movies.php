<?php
  include_once('../includes/database.php');
  
  function getMovieInfo($movieID){
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT * FROM Movie WHERE ID = ?');
      $stmt->execute(array($movieID));
      $row = $stmt->fetch();
        return $row;
      }
    catch(PDOException $e) {
      return -1;
    }
  }


  function getAllGenresMovie($movieID){
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT GenreID FROM MovieGenre WHERE MovieID = ?');
      $stmt->execute(array($movieID));
     $rows = $stmt->fetchAll();
     $stmt1 = $db->prepare('SELECT Name FROM Genre WHERE ID = ?');
     foreach($rows as $row){
        $stmt1->execute(array($row['GenreID']));
      
     }
     $genres= $stmt1->fetchAll();
     return $genres;  
     
    
    }catch(PDOException $e) {
      return -1;
    }
  }

  function getAllDirectorsMovie($movieID){
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT DirectorID FROM MovieDirector WHERE MovieID = ?');
      $stmt->execute(array($movieID));
     $rows = $stmt->fetchAll();
     $stmt1 = $db->prepare('SELECT Name FROM Director WHERE ID = ?');
     foreach($rows as $row){
        $stmt1->execute(array($row['DirectorID']));
      
     }
     $directors= $stmt1->fetchAll();
     return $directors;  
     
    
    }catch(PDOException $e) {
      return -1;
    }
  }
  function getNumberReviewsMovie($movieID){
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT count(ID) FROM Review WHERE MovieID = ?');
      $stmt->execute(array($movieID));
     $rows = $stmt->fetch();
    return $rows['count(ID)'];
    }catch(PDOException $e) {
      return -1;
    }
  }
  function getAllMovies(){
    $db = Database::instance()->db();
    try {
      $stmt = $db->prepare('SELECT * FROM Movie ORDER BY ReleaseYear DESC');
      $stmt->execute();
     $rows = $stmt->fetchAll();
    return $rows;
    }catch(PDOException $e) {
      return -1;
    }
  }


