
<!DOCTYPE html>
<html>


<head>
    <title>Nabi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="../js/review.js" defer></script>

</head>

<body>
<?php function draw_profile($userinfo, $reviews) { ?>
<div class="profile_container">

    <div class="profile_header">
        <header>
        <p>  <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)" width="40" height="40"> nabi 
       </header>
    </div>

    <div class="profile_side_nav">
        
    </div>

    <div class="profile_info" >

        <div class="edit_profile">
            <a href="edit_profile.php" class="edit"> edit profile </a><br>
           
            <a href="../actions/action_delete_account.php?" class="delete">delete account</a>  
        </div>

        <!-- <div class="profile_picture"> -->
    
         <!-- <img src=<?=$userinfo['Photo']?>> -->
        
         <!-- </div> -->

        <div class="profile_name">
            <h2>  <img src="../assets/avatar.png" width="100" height="100"> 
                  <?=$userinfo['FirstName']?> <?=$userinfo['LastName']?> </h2>
        </div>

        <div class="profile_country">
            <h4> Country: <?=$userinfo['Country']?> </h4>
        </div>

        <div class="profile_gender">
            <h4> Gender: <?=$userinfo['Gender']?> </h4>
        </div>


        <div class="profile_points">
            <h3><?=$userinfo['Points']?> Stars </h3>  
        </div>


    </div>

<?php } ?>
    <div class="Reviews">
        <p>Reviews <button onclick="draw_review()"> add review</button>
        <a href="main_page.php"> Feed </a>
         </p>
   
   
    </div>
   
    
    <?php function draw_reviews($reviews){?>
        <div class="profile_reviews">
    <?php foreach($reviews as $review){?>
        
        <div class="review_info">
             <h2><?=$review['Title']?> </h2>
            <h3><?=$review['ReviewDate']?></h3>
            <a href="movie.php?movie_id=<?php echo htmlentities($review['MovieID'])?>"><?=$review['MovieName']?></a>                   <h4><?=$review['UserName']?> </h4>
        </div>
       
        <div class="review_content">
            <h5><?=$review['Description']?></h5>
        </div>
        <div class="review_likes">
        
            <div class="likes">
                <input type="button">
                <h4><?=$review['Heart']?></h4>
            </div>
            <div class="dislikes">
                <input type="button">
                <h4><?=$review['Dislike']?></h4>
            </div>                          

         <div class="comments">
             <!-- <button type ="button"><?=$review['NumberComments']?> Comments -->
         </div>
        </div>
        <?php }?>
        </div>
    <?php }?>

</div>


</div>
</body>
</html>
