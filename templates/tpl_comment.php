
<?php function draw_comment($comment){?>
<div class="comment" data-id="<?=$comment['ID']?>" user-id="<?=$comment['UserID']?>">
<h4> Commented by
<a href="profile.php?username=<?php echo htmlentities($comment['Username'])?>"><?=$comment['Username']?></a>
  on <?=$comment['CommentDate']?></h4>
  <p><?=$comment['Description']?></p>
  <span class="likes"><?=$comment['Likes']?></span> <br>
  <span class="dislikes"><?=$comment['Dislikes']?></span>
  </div>
  </div>
  <?php }?>