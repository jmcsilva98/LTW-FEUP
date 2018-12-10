
<?php function draw_comment($comment){?>
  <div class="comment" data-id="<?=$comment['ID']?>" user-id="<?=$comment['UserID']?>">
  <p><?=$comment['Description']?></p>
  
  <ul class="review_nav" id="comment_nav">
    <li>
    <h4> Commented by
    <a href="profile.php?username=<?php echo htmlentities($comment['Username'])?>"><?=$comment['Username']?></a>
    on <?=$comment['CommentDate']?></h4> 
    </li>
    <li>
    <span id="likes" class="fas fa-heart"><?=$comment['Likes']?></span> <br>
    <li>
    <li>
    <span id="dislikes" class="fas fa-heartbeat"><?=$comment['Dislikes']?></span>
    </li>
    </div>
  </ul>
  <?php }?>