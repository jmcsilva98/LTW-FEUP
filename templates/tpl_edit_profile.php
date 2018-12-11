<body>
    <?php function draw_edit_profile($userinfo,$allMoviesAndReviews) {?>
    <div class="edit_profile_container">

        <div class="edit_profile_header">
            <header>
                <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
            </header>
        </div>

        <div class="side_nav">

           
        </div>


        <div class="upload_photo">
            <form method="post" action="../actions/action_upload_profile_photo.php" enctype="multipart/form-data" >

                 <?php if(!(file_exists("../assets/profilePhotos/".$userinfo['ID'].".jpg"))){ ?>
                    <img id="profile_photo" src="../assets/profilePhotos/default.jpg" alt="Profile photo"><br> 
                 <?php } else{ ?>
                    <img id="profile_photo" src="../assets/profilePhotos/<?=$userinfo['ID']?>.jpg" alt="Profile photo"><br> 
                 <?php } ?>

                <span onclick="callFileBtn()" class="file_btn"> choose file </span>
                <input type="file" id="file_upload" name="file_upload"><br>
              
                <input type="submit" value="Upload"><br>
    
            </form>
        </div>


        <div class="edit_profile_form">
        <h1> Edit Profile </h1>

         <form method="post" action="../actions/action_update_user_data.php" >
            <label> First Name </label><br>
            <input type="text" name="firstName" placeholder="first name" value="<?php echo htmlentities($userinfo['FirstName']) ?>" required><br>
            <label> Last Name </label><br>
            <input type="text" name="lastName" placeholder="last name" value="<?php echo htmlentities($userinfo['LastName']) ?>" required><br>
            <label> Gender </label><br>
            <input type="radio" name="gender" placeholder="female" value="female" checked="<?php echo htmlentities($userinfo['Gender']) ?>" required>female
            <input type="radio" name="gender" placeholder="male" value="male" value="<?php echo htmlentities($userinfo['Gender']) ?>" required>male<br>
            <br><label>Country </label><br>
            <select name="country" required>
                <?php select_country($userinfo['Country']) ?>
            </select><br>
            <label> Birthday </label><br>
            <input type="date" name="birthday" min="1903-01-01" max="2005-01-01" value="<?php echo htmlentities($userinfo['Birthday']) ?>" required><br>
            <label> Username </label><br>
            <input type="text" name="username" placeholder="username" maxlength="20" value="<?php echo htmlentities($userinfo['Username']) ?>" required><br>
            <label>Email </label><br>
            <input type="email" name="email" placeholder="email" value="<?php echo htmlentities($userinfo['Email']) ?>" required> <br>
            <label> Password </label><br>
            <input type="password" name="password" placeholder="new password" required><br>
            <label> Confirm Password </label><br>
            <input type="password" name="repeatpassword" placeholder="confirm new password" required><br>
            
            <p>
            <input type="submit" value="Update">
             
            <a href="main_page.php"> cancel </a></p>
        </form>

        

        </div>

    <div class="edit_profile_footer">
        <?php draw_footer(); ?>
    </div>

    </div>
    <?php } ?>

    </body>
    </html>








