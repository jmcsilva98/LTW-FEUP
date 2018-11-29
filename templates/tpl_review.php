
<?php function draw_review(){?>
<form method="post" action="../actions/action_add_review.php" >
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="movieName" placeholder="Movie Name" required><br>
            <input type="text" name="description" placeholder="Description" required><br>
            <input type="submit" value="Add Review">
<?php }?>