
<!DOCTYPE html>
<html>


<head>
    <title>Nabi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="profile_container">

    <div class="profile_header">

    <header>
      <p>  <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)" width="40" height="40"> nabi </p>
    </header>

    </div>

     <div class="profile_side_nav">
        
    </div>

     <div class="profile_info" >
    <?php function draw_profile($userinfo) { ?>
    
        <div class="edit_profile_button">
            <a href="edit_profile.php" class="edit_profile"> edit profile </a>
        </div>
        <div class="profile_picture">
    
         <img src=<?=$userinfo['Photo']?>> 
    
         </div>

        <div class="profile_name">
            <h2><?=$userinfo['FirstName']?> <?=$userinfo['LastName']?> </h2>
        </div>

        <div class="profile_points">
            <h3><?=$userinfo['Points']?> Stars </h3>
        </div>

        <div class="profile_country">
            <h4> Country: <?=$userinfo['Country']?> </h4>
        </div>

    <?php } ?>
    </div>


    <div class="Stories">
    <p>Stories</p>
    </div>
    
    <div class="profile_reviews">
    <?php function draw_reviews($reviews){
             foreach($reviews as $review){?>
        
        <div class="review_info">
            <h2><?=$review['Title']?> </h2>
            <h3><?=$review['ReviewDate']?></h3>
            <a href="movie.php?movie_id=<?php echo htmlentities($review['MovieID'])?>"><?=$review['MovieName']?></a>       
            <h4><?=$review['UserName']?> </h4>
        </div>
       
        <div class="review_content">
            <h5><?=$review['Description']?></h5>
        </div>
        <div class="review_likes">
        
            <div class="likes">
                <button type="button"><?=$review['Heart']?>
                <button type="button"><?=$review['Dislike']?>
            </div>
         <div class="comments">
             <button type ="button"><?=$review['NumberComments']?> Comments
         </div>
        </div>
        <?php } }?>
 </div>

       
        <div class="main_page_link">
        <a href="main_page.php">Main Page </a>
        </div>


</div>
</body>
</html>
