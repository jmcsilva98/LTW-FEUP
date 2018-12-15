<?php function draw_side_nav(){ ?>
<nav>
                <a class="main_page_btn" href="main_page.php">
                <p>  <span class="fas fa-home"></span>
                    Feed </p>
                 </a>    
                 <a class="profile_btn" href="profile.php">
                 <p>  <span class="fas fa-user"></span>
                   Profile </p>
                 </a> 
                 <a class="edit_profile_btn" href="edit_profile.php">
                 <p> <span class="fas fa-user-edit"></span>
                   Edit Profile </p>
                 </a>   
                 <a class="about_btn" href="about.php">
                  <p> <span class="fas fa-question-circle"></span>
                     About </p>
                 </a>   
                 <a class="logout_btn" href="../actions/action_logout.php">
                    <p> <span class="fas fa-sign-out-alt"></span>
                     Logout </p>
                 </a>   
</nav>

<?php } ?>