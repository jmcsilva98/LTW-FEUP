

<?php 
include_once(__DIR__.'/tpl_delete_account.php');

 ?>

<body>

<?php function draw_profile($userinfo, $reviews,$allMoviesAndReviews) { ?>
<div class="profile_container" id=<?=$userinfo['ID']?>>
    <div class="profile_header">
        <header>
            <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
       </header>
    </div>

    <div class="side_nav">
    </div>

      <div class="profile_photo">
          <?php if(!(file_exists("../assets/profilePhotos/".$userinfo['ID'].".jpg"))){ ?>
            <img src="../assets/profilePhotos/default.jpg" width="100" height="100" alt="profile avatar"> 
          <?php } else{ ?>
            <img src="../assets/profilePhotos/<?=$userinfo['ID']?>.jpg" width="100" height="100" alt="profile avatar"> 
           <?php } ?>
     </div>


    <div class="profile_info" >

        <div class="edit_profile">

           <p>
         <?php if ($userinfo['Username'] == $_SESSION['username']){?> 
           <div class="delete">
                <input onclick="openBox('Delete Account')" type="submit" value="Delete Account"/>  
            </div>
             <a href="edit_profile.php" class="edit"> edit profile </a>
            </p>
            <?php }?>
    
       </div>

        <div class="profile_name">
            <h2> 
            <?php echo htmlentities($userinfo['FirstName'])?>  <?php echo htmlentities($userinfo['LastName'])?>
            </h2>
        </div>

        <div class="profile_country">
            <h4> Country:  <?php echo htmlentities($userinfo['Country'])?></h4>
        </div>

        <div class="profile_gender">
            <h4> Gender:   <?php echo htmlentities($userinfo['Gender'])?> </h4>
        </div>


        <div class="profile_points">
        <h3><img src="../assets/star.png" alt ="star icon" >
            <span><?=$userinfo['Points']?></span> Stars </h3>  
        </div>

        
    </div>


    <div class="Reviews">

        <p>Reviews
        <input  onclick="openBox('Add Review')" type="submit" value ="Add Review">
        <a href="main_page.php"> Feed </a>     
        
        
        </p>

    </div>

     <div class="profile_reviews">
        <?php draw_reviews($reviews); ?>
    </div>

    <div class="profile_footer">
         <?php draw_footer(); ?>
    </div>
    </div>
<?php } ?>

 
    </body>
    </html>