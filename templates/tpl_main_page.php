
<body>

<?php function draw_feed($userinfo, $reviews) { ?>

<div class="feed_container">
   
   
    <div class="feed_header">
                
        <p>  <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)" width="40" height="40"> nabi </p> 
      
        <?php draw_nav($userinfo); ?>
       
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