<?php   include_once('../templates/tpl_countries.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Nabi</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">


</head>


<body>
<div id="register_header">
<header>
    <img src="../assets/mininabi.png" alt="Nabi logo (butterfly)">
</header>
</div>
<section id="register">

<div id="register_content">
<h1> Create a new account </h1>

 <form method="post" action="../actions/action_register.php" >
      <input type="text" name="firstName" placeholder="first name" required>
      <input type="text" name="lastName" placeholder="last name" required><br>
      <input type="text" name="username" placeholder="username" maxlength="20" required><br>
      <input type="radio" name="gender" placeholder="female" required >female
      <input type="radio" name="gender" placeholder="male" required>male<br>
      <select name="country" required>
        <?php select_country() ?>
      </select><br>
      <label> Birthday </label><br>
      <input type="date" value="birthday" min="1903-01-01" max="2005-01-01" required><br>
      <input type="text" name="username" placeholder="username" maxlength="8" required><br>
      <input type="email" name="email" placeholder="email" required> <br>
      <input type="password" name="password" placeholder="password" required><br>
      <input type="password" name="repeatpassword" placeholder="confirm password" required><br>
      <input type="submit" value="Register">
 </form>
</div>
 <p>Already have an account? <a href="login.php" class="login_form">Login here.</a></p>
    
</section>
