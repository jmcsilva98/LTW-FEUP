<?php function draw_nav($userinfo,$allMoviesAndReviews){ ?>

<ul class="feed_nav">

<li> 
<div class="nav_logo"> 
 <a href="main_page.php"><p>  <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)" width="40" height="40"> nabi </p> </a>
</div>
</li> 

<li> 
<div class="search_container">
   <input class="search_input" type="text" onkeyup="searchFunction()" placeholder="Search">
   <ul id ="allMoviesAndReviews">
   <?php drawAllMoviesAndReviews($allMoviesAndReviews);?>
   </ul>
</div>
</li>

<li>  <a class="profile_nav_btn" href="profile.php">

<?php if(!(file_exists("../assets/profilePhotos/".getID($_SESSION['username']).".jpg"))){ ?>
   <img src="../assets/profilePhotos/default.jpg" width="100" height="100" alt="profile avatar"> 
<?php } else{ ?>
   <img src="../assets/profilePhotos/<?=getID($_SESSION['username'])?>.jpg" width="100" height="100" alt="profile avatar"> 
<?php } ?>

<?php echo htmlentities($userinfo['FirstName']) ?> 
</a> </li>
<li> <a class="add_review_btn" href="?.php"> <span class="fas fa-plus-circle"></span> Add review </a> </li>
<li>
<div class="menu">
   <div class="title" onclick="show_dropdown_menu()"> Menu <span class="fa fa-bars"></span> <div class="arrow"> </div> </div>
   <div class="dropdown">
       <a href="main_page.php">  <p>Feed <span class="fa fa-home"></span> </p> </a>
       <a href="profile.php"> <p>Profile <span class="fa fa-user"></span> </p> </a>
       <!-- acrescentar -->
       <p>Add review <span class="fa fa-plus"></span></p>
       <a href="about.php"> <p>About <span class="fa fa-question-circle"></span></p> </a>
       <a href="../actions/action_logout.php"> <p>Logout <span class="fa fa-sign-out-alt"></span></p> </a>
           
   </div>
</div>
</li>  
</ul>

<?php } ?>

<?php function drawAllMoviesAndReviews($allMoviesAndReviews){
    $movies = $allMoviesAndReviews['movies'];
    $reviews= $allMoviesAndReviews['reviews'];
    foreach($movies as $movie){?>
    <li><a href="movie.php?movie_id=<?php echo htmlentities($movie['ID'])?>"><?=$movie['Name']?></a></li>
    <?php }?>
   

<?php }?>