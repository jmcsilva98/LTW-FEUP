
<body>

<?php function draw_feed($userinfo, $reviews,$allMoviesAndFilms) { ?>

<div class="feed_container">
   
   
    <div class="feed_header">
    
        <header>
            <p> <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)"> nabi </p>
            <?php draw_nav($userinfo,$allMoviesAndFilms); ?>
        </header>
    
  </div>


     <div class="feed_reviews">
        <?php draw_reviews($reviews); ?>
    </div>

    <div class="feed_footer">
         <?php draw_footer(); ?>
    </div>
    </div>
<?php } ?>

 
    </body>
    </html>