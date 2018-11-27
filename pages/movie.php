<?php


    include_once('../includes/session.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../templates/tpl_movie.php');
    include_once('../database/db_movies.php');
    include_once('../database/db_user.php');
  
    // Verify if user is logged in
    if (!isset($_SESSION['username']))
    die(header('Location: login.php')); 

    $movieID = $_GET['movie_id'];
    $movie_info=getMovieInfo($movieID);
    $movie_genres=getAllGenresMovie($movieID);
    $movie_directors=getAllDirectorsMovie($movieID);
    $number_reviews=getNumberReviewsMovie($movieID);
    draw_movie($movie_info,$movie_genres,$movie_directors,$number_reviews);
    draw_footer();
?>