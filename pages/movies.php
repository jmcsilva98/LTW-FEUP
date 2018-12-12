<?php


    include_once('../includes/session.php');
    include_once('../templates/common/tpl_header.php');
    include_once('../templates/common/tpl_footer.php');
    include_once('../templates/common/tpl_side_nav.php');
    include_once('../templates/tpl_movie.php');
    include_once('../database/db_movies.php');
    include_once('../database/db_user.php');
  
    $allMovies=getAllMovies();

    foreach($allMovies as $movie){
    $movie_info=getMovieInfo($movie['ID']);
    $movie_genres=getAllGenresMovie($movie['ID']);
    $movie_directors=getAllDirectorsMovie($movie['ID']);
    $number_reviews=getNumberReviewsMovie($movie['ID']);
    $allMovies=getAllMovies();
    $allReviews=getAllReviews();
    $allMoviesAndFilms = array('movies'=> $allMovies,'reviews'=>$allReviews); 
    draw_movie($movie_info,$movie_genres,$movie_directors,$number_reviews,$allMoviesAndFilms);
    }
    draw_footer();
    ?>