
<body>

<?php function draw_feed($userinfo, $reviews,$allMoviesAndReviews) { ?>

<div class="feed_container">
   
   
    <div class="feed_header">
    
        <header>
            <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
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