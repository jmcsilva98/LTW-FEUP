
<?php include_once(__DIR__.'/tpl_review.php'); ?>
<div class="Reviews">
        <p>Reviews <input  onclick="openBox('Add Review')" type="submit" value ="Add Review">
        <a href="main_page.php"> Feed </a>
         </p>
   
   
    </div>
    
    <?php function draw_reviews($reviews){?>
        <div class="profile_reviews">
    <?php foreach($reviews as $review){?>
        
        <div class="review_info">
             <h2><?=$review['Title']?> </h2>
            <h3><?=$review['ReviewDate']?></h3>
            <a href="movie.php?movie_id=<?php echo htmlentities($review['MovieID'])?>"><?=$review['MovieName']?></a><br>            
            <a href="profile.php?username=<?php echo htmlentities($review['UserName'])?>"><?=$review['UserName']?></a>
        </div>
       
        <div class="review_content">
            <h5><?=$review['Description']?></h5>
        </div>
        <div class="review_likes">
        
            <div class="likes">
                <input type="hidden" value =<?=$review['ID']?>>
                <input type="button">
                <h4><?=$review['Heart']?></h4>
            </div>
            <div class="dislikes">
                <input type="hidden" value =<?=$review['ID']?>>
                <input type="button">
                <h4><?=$review['Dislike']?></h4>
            </div>                          

         <div class="comments">
         <input onclick="openBox('Show Comments',<?$review['ID']?>)" type="submit" value=<?=$review['NumberComments']?>Comments>
         </div>
        </div>
        <?php }?>
        </div>
    <?php }?>

</div>