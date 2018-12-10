
 <?php include_once(__DIR__.'/tpl_review.php'); 
        include_once(__DIR__.'/tpl_comment.php');
         ?> 
<body>
    
    <?php function draw_reviews($reviews){?>
       
    <?php foreach($reviews as $review){?>
        <article data-id="<?=$review['ID']?>" user-id="<?=$review['UserID']?>">
        <div class="review_info">
             <h2><?=$review['Title']?> </h2>
            <h3> Movie: <a href="movie.php?movie_id=<?php echo htmlentities($review['MovieID'])?>"><?=$review['MovieName']?></a> </h3>
            <h4> Created by
            <a href="profile.php?username=<?php echo htmlentities($review['UserName'])?>"><?=$review['UserName']?></a>
            on <?=$review['ReviewDate']?></h4>
           
        </div>
       
        <div class="review_content">
            <h5><?=$review['Description']?></h5>
        </div>
        <div class="review_options">

            <ul class="review_nav">
              <li>  
                <div class="likes">
                    <!-- <input type="button">  -->
                    <span id="review_likes" class="fas fa-heart" >
                    <?=$review['Heart']?></span>
                </div>
              </li> 
              <li>  
                <div class="dislikes">
                    <!-- <input type="button"> -->
                    <span id="review_dislikes" class="fas fa-heartbeat">
                    <?=$review['Dislike']?></span> 
                </div> 
              </li>
              <li>
              <input type="button"  name="addComment" value="Add Comment">
             
                <?php add_comment()?>
         
              </li>
             </ul> 
        </div>             
         <div class="comments">
         <input type="button" value="<?=$review['NumberComments']?> Comments">
            <br><div class="allComments">
            <?php foreach($review['Comments'] as $comment){?>
                <?php draw_comment($comment)?>
            <?php }?>
            </div>
        </div>
        </article>     
        <?php }?> 
    <?php }?>
</body>