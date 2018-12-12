<?php function add_comment() { ?>
   <div id="add_comment" class="popup">
                <div class="popup-content">
                 <form method="post" id="addCommentForm">
                    <textarea id="description" placeholder="Share your opinion..." required></textarea><br>
                    <input  type="button" value="Cancel"> 
                    <input type="submit" value="Add Comment" id="submit_comment">
                 </form>
                </div>
            </div>

<?php } ?>