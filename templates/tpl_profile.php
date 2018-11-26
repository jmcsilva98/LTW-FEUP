
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

<?php function draw_profile($userinfo) {

?>
<body>
    <header>
        <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)">
    </header>

    <div class="profile_container">

    <div class="profile_info" >

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

    </div>


    </div>


<?php }?>
