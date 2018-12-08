<?php include_once(__DIR__.'/tpl_movies.php');?>

<div id="add_review" class="popup">
   <div class="popup-content">
        <form method="post" id="addReviewForm">
            <input type="text" id="title" placeholder="Title" required>
            <select id="movie" required>
                <?php select_movies() ?>
            </select><br>
            <input type="textarea" id="description" placeholder="Description" required><br>
            <input onclick="closeBox('Add Review')" type="button" value="Cancel">
            <input onclick="addReview()" type="submit" value="Add Review">
           
        </form>
    </div>
</div>

