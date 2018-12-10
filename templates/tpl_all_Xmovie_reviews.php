<?php function draw_all_Xmovie_reviews($all_reviews, $userinfo, $allMoviesAndReviews) { ?>



<div class="feed_container">
   
   
   <div class="feed_header">
   
       <header>
           <p> <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)"> nabi </p>
           <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
       </header>
   
 </div>


    <div class="feed_reviews">
        <?php draw_reviews($all_reviews); ?>
   </div>

   <div class="feed_footer">
        <?php draw_footer(); ?>
   </div>
   </div>

<?php } ?>

</body>
</html>