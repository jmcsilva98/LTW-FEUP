
    <header>
        <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)">
    </header>

    <div class="profile_container">
    <?php function draw_movie($movie,$movie_genres,$movie_directors,$number_reviews) {

?>
    <div class="movie_info" >
        <h1><?=$movie['Name']?></h1>
        <h2><?=$movie['ReleaseYear']?></h2>
        <?php foreach($movie_genres as $genre){?>
        <h3><?=$genre['Name']?></h3>
        <?php }?>
        <?php foreach($movie_directors as $director){?>
        <h4><?=$director['Name']?></h4>
        <?php }?>
        <a href="reviews.php?movie_id=<?php echo htmlentities($movie['ID'])?>"><?=$number_reviews?> reviews</a>    
        
    </div>
    
    <?php }?>
</div>
