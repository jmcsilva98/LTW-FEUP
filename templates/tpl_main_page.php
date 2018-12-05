
<body>

<?php function draw_feed($userinfo, $reviews) { ?>

<div class="feed_container">
    <div class="feed_header">
        <header>
        <p>  <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)" width="40" height="40"> nabi </p>
      
        <div class="nav_buttons">
            <a class="add_review_btn" href="?.php">
                <span class="fas fa-plus-square"></span>
            </a>

           <a class="profile_nav_btn" href="profile.php">
            
                <?php if(!(file_exists("../assets/profilePhotos/".getID($_SESSION['username']).".jpg"))){ ?>
                    <img src="../assets/profilePhotos/default.jpg" width="100" height="100" alt="profile avatar"> 
                <?php } else{ ?>
                    <img src="../assets/profilePhotos/<?=getID($_SESSION['username'])?>.jpg" width="100" height="100" alt="profile avatar"> 
                <?php } ?>
              
                
                <?php echo htmlentities($userinfo['FirstName']) ?> 
            </a>
        </div>
        <div class="menu">
            <div class="title" onclick="show_dropdown_menu()">
            Menu
             <span class="fa fa-bars"></span>
                <div class="arrow">

                </div>
            </div>
        
            <div class="dropdown">
                <a href="main_page.php">
                <p>Feed <span class="fa fa-home"></span></p>
                </a>
                <a href="profile.php">
                <p>Profile <span class="fa fa-user"></span></p>
                </a>
                <a href="../templates/tpl_review.php">
                <p>Add review <span class="fa fa-plus"></span></p>
                  <!-- meter about -->
                <a href="main_page.php">
                <p>About <span class="fa fa-question-circle"></span></p>
                </a>
                <a href="../actions/action_logout.php">
                <p>Logout <span class="fa fa-sign-out-alt"></span></p>
                </a>
            </div>
        </div>  
       
        </header>
    
  </div>


     <div class="feed_reviews">
        <?php draw_reviews($reviews); ?>
    </div>

    <div class="feed_footer">
         <?php draw_footer(); ?>
    </div>
    </div>
<?php } ?>

 
    </body>
    </html>