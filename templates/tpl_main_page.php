
<body>

<?php function draw_feed($userinfo, $reviews) { ?>

<div class="feed_container">
   
   
    <div class="feed_header">
                
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
                <!-- <a href="../templates/tpl_review.php"> -->
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