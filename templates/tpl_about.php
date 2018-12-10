
<body>

<?php function draw_about($userinfo,$allMoviesAndReviews) { ?>

<div class="about_container">
   
   
    <div class="about_header">
    
        <header>
            <p> <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)"> nabi </p>
            <?php draw_nav($userinfo,$allMoviesAndReviews); ?>
        </header>
    
  </div>


     <div class="about_text">

         <h1> About </h1>
        
         <p> Coming from the word Butterfly in Korean, Nabi is a website created with the intention of giving it's users the liberty to
             share their opinions about movies, giving them the ability to spread their <i> wings </i>. Not only can the users post reviews
             about movies but also like or dislike other posts, comment on them, and many other things... 
             Nabi was developed by people for people, crafted with the mindset of being a easy and pleasing platform for everyone to use.
        </p>
        <p> This website was created by Ana Rita Norinho and Joana Silva for the class of Web Languages and Technologies of the Integrated
            Master in Informatics and Computing Engineering at FEUP - Faculty of Engineering of University of Porto. </p>





    </div>

    <div class="about_footer">
         <?php draw_footer(); ?>
    </div>
    </div>
<?php } ?>

 
    </body>
    </html>