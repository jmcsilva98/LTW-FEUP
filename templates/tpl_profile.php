

<?php 
include_once(__DIR__.'/tpl_delete_account.php');

 ?>

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
           
            <input onclick="openBox('Delete Account')" type="submit" value="Delete Account"/>  
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
</body>
