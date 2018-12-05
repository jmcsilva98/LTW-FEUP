
 <?php include_once(__DIR__.'/tpl_review.php'); 
        include_once(__DIR__.'/tpl_comment.php'); ?> 
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
        <div class="review_likes">
                <div class="likes">
                    <input type="button"> 
                    <h4><span class="fas fa-heart" ></span>
                    <?=$review['Heart']?></h4>
                </div>
                <div class="dislikes">
                    <input type="button">
                    <h4><span class="fas fa-heartbeat"></span>
                    <?=$review['Dislike']?></h4>
                </div>  
        </div>             
         <div class="comments">
            <input type="button" value="<?=$review['NumberComments']?> Comments">
            <div class="allComments">
            <?php foreach($review['Comments'] as $comment){?>
                <?php draw_comment($comment);?>
            <?php }?>
            </div>
           
        </div>
        </article>     
        <?php }?> 
    <?php }?>
</body>