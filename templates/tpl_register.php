<?php   include_once(__DIR__.'/tpl_countries.php'); ?>

<body>

    <div class="register_container">
    
    <div class="register_header">
        <header>
           <p> <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)"> nabi </p>
        </header>
    </div>
    <div class="register_form">

        <h1> Create a new account </h1>
        
        <form method="post" action="../actions/action_register.php" >
            <input type="text" name="firstName" placeholder="first name" required>
            <input type="text" name="lastName" placeholder="last name" required><br>
            <input type="radio" name="gender" placeholder="female" value="female" required>female
            <input type="radio" name="gender" placeholder="male" value="male" required>male<br>
            <select name="country" required>
                <?php select_country() ?>
            </select><br>
            <label> Birthday </label><br>
            <input type="date" name="birthday" min="1903-01-01" max="2005-01-01" required><br>
            <input type="text" name="username" placeholder="username" maxlength="20" required><br>
            <input type="email" name="email" placeholder="email" required> <br>
            <input type="password" name="password" placeholder="password" required><br>
            <input type="password" name="repeatpassword" placeholder="confirm password" required><br>
            <input type="submit" value="Register">
        </form>

     </div>

    <div class="register_login_link">
        <p>Already have an account? <a href="login.php">Login here.</a></p>
    </div>

    <div class="register_footer">
        <footer>
            <p> &#169; FEUP 2018 Web Languages and Technologies | Made by Rita Norinho and Joana Silva  </p>
        </footer>
    </div>
  
  </div>


 
