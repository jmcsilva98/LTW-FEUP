<?php
  include_once('../includes/session.php');
  include_once('../database/db_reviews.php');
  include_once('../database/db_user.php');
  include_once('../database/db_movies.php');

  $username = $_SESSION['username'];
  $userId = getID($username);
  $title = $_POST['title'];
  $movieName=$_POST['movieName'];
  $movieId=getMovieID($movieName);
  $reviewDate = date("Y-m-d");
  $description=$_POST['description'];
  if ($movieId==-1){
    $_SESSION['messages']= array('type' => 'error', 'content' => 'This movie does not exist! You should add it to the list of existing movies!');

}
if (empty($description)){
    $_SESSION['messages']= array('type' => 'error', 'content' => 'You must have a review description!');
    header("Location: ../actions/actions_add_review");
}


else if(insertReview($title, $userId, $movieId, $reviewDate, $description)) {

        $_SESSION['messages'][] = array('type' => 'success', 'content' => 'Your review has been added with success!');
    }
else {
        $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Can\'t add your review!');
       //adicionar página de erro geral(do genero de ERROR 404)
    }

?>