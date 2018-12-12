<?php


    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../templates/common/tpl_nav_bar.php');
    include_once('../templates/tpl_movie.php');
    include_once('../database/db_movies.php');
    include_once('../database/db_reviews.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']) || !preg_match("/^[A-z0-9_-]{6,15}$/", $_SESSION['username']))
    die(header('Location: login.php')); 


    $user_info = getUserInfo($_SESSION['username']);

    $movieID = $_GET['movie_id'];
    $movie_info=getMovieInfo($movieID);
    $movie_genres=getAllGenresMovie($movieID);
    $movie_directors=getAllDirectorsMovie($movieID);
    $number_reviews=getNumberReviewsMovie($movieID);
    $allMovies=getAllMovies();
    $allReviews=getAllReviews();
    $allMoviesAndFilms = array('movies'=> $allMovies,'reviews'=>$allReviews);    
    draw_movie($user_info, $movie_info,$movie_genres,$movie_directors,$number_reviews,$allMoviesAndFilms);
    
    //draw_footer();
?>