<?php include_once(__DIR__.'/tpl_movies.php');?>

<div id="add_review" class="popup">
   <div class="popup-content">
        <form method="post" id="addReviewForm">
            <h1> Add a Review </h1>
            <input type="text" id="title" placeholder="Title" required><br>
            <select id="movie" required>
                <?php select_movies() ?>
            </select><br>
            <textarea id="description" placeholder="Share your opinion..." rows="10" cols="60" required></textarea><br>
            <input onclick="closeBox('Add Review')" type="button" value="Cancel">
            <input onclick="addReview()" type="submit" value="Add Review">
            
        </form>
    </div>
</div>

