
<body>
<?php function draw_movie($userinfo, $movie,$movie_genres,$movie_directors,$number_reviews,$allMoviesAndReviews) {

?>
    <div class="movie_container">
    
    <div class="movie_header">
        <header>
            <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
        </header> 
    </div> 

    <div class="movie_info" >

        <h1> <?=$movie['Name']?> <br>
        <img src="../assets/movies/<?=$movie['CoverPhoto']?>" alt="Cover photo"  height="350" width="300"></h1>
        <h2> Release Year: <?=$movie['ReleaseYear']?> </h2>
        <h3> Genre:
        <?php foreach($movie_genres as $genre){?>
            <?=$genre['Name']?>
        <?php }?></h3>
        
        <?php foreach($movie_directors as $director){?>
            <h4>Director: <?=$director['Name']?></h4>
        <?php }?>
        <h5> <p> Description</p> <?=$movie['Description']?></h5>
        <a href="reviews.php?movie_id=<?php echo htmlentities($movie['ID'])?>"><?=$number_reviews?> reviews</a>    
        
    </div>
    
    <div class="movie_footer">
         <?php draw_footer(); ?>
    </div>

</div>
<?php }?>

</body>
</html>