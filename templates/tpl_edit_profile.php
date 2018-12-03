<!DOCTYPE html>
<html>

<head>
    <title>Nabi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


</head>

<body>
    <?php function draw_edit_profile($userinfo) {?>
    <div class="edit_profile_container">

        <div class="edit_profile_header">
            <header>
            <p> <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)"> nabi </p>

           
                <!-- ALTERAR PARA ADICIONAR REVIEW -->
                 <a class="add_review_btn" href="?.php">
                  <span class="fas fa-plus-square"></span> </a>

                 <a class="profile_btn" href="profile.php">
                   <span class="fas fa-user-circle"></span> 
                   <?php echo htmlentities($userinfo['FirstName']) ?> </a>

                <div class="menu">

                    <div class="menu_title" onclick="menu()"> 
                    <?php echo htmlentities($userinfo['FirstName']) ?>
                    <span class="fa fa-bars"></span>
                        <div class="arrow"></div>
                        </div>
                        <div class="menu_dropdown">
                         <a class="main_page_btn" href="main_page.php">
                            <p> Feed <span class="fas fa-home"></span> </p>
                        </a>
                        <a class="profile_btn" href="profile.php">
                            <p> My Profile <span class="fas fa-user-circle"></span> </p>
                        </a>
                        <a class="edit_btn" href="edit_profile.php">
                            <p> Edit Profile <span class="fas fa-user-edit"></span> </p>
                        </a>
                        <a class="about_btn" href="about.php">
                            <p> About <span class="fas fa-question-circle"></span> </p>
                        </a> 
                        <a class="logout_btn" href="../actions/action_logout.php">
                            <p> Logout <span class="fas fa-sign-out-alt"></span> </p>
                        </a>
                        </div>
        
        
            </header>
        </div>

        <div class="side_nav">

            <?php draw_side_nav() ?>
        </div>


        <div class="upload_photo">
            <form method="post" action="../actions/action_upload_profile_photo.php" enctype="multipart/form-data" >
               <!-- ARRANJAR BASE DE DADOS -->
               <!-- <img id="profile_photo" src="<?php echo htmlentities('../assets/profilePhotos/'.$userinfo['Photo']) ?>" alt="Profile photo"><br> -->
              <img id="profile_photo" src="../assets/default.jpg" alt="Profile photo"><br> 
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
            <input type="radio" name="gender" placeholder="female" value="female" value="<?php echo htmlentities($userinfo['Gender']) ?>" required>female
            <input type="radio" name="gender" placeholder="male" value="male" value="<?php echo htmlentities($userinfo['Gender']) ?>" required>male<br>
            <br><label>Country </label><br>
            <select name="country" value="<?php echo htmlentities($userinfo['Country']) ?>" required>
                <?php select_country() ?>
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
    <footer>
        <p> &#169; FEUP 2018 Web Languages and Technologies | Made by Rita Norinho and Joana Silva  </p>
    </footer>
    </div>

    </div>
    <?php } ?>

    </body>
    </html>








