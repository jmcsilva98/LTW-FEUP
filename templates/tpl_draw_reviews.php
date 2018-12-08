
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
            <div style="display:none;" id="allComments">
            <?php foreach($review['Comments'] as $comment){?>
                <?php draw_comment($comment);?>
            <?php }?>
            </div>
            <input type="button" onclick ="openBox('Show Comments')" value="<?=$review['NumberComments']?> Comments">
            <input type="button" onclick="openBox('Add Comment')" value="Add Comment">
            <div id="add_comment" data-id="<?=$review['ID']?>" class="popup">
                <div class="popup-content">
                 <form method="post" id="addCommentForm">
                    <input type="textarea" id="description" placeholder="Description" required><br>
                    <input onclick="closeBox('Add Comment')" type="button" value="Cancel">
                    <input  type="submit" value="Add Comment">
                </form>
                </div>
                
            </div>
        </div>
        </article>     
        <?php }?> 
    <?php }?>
</body>