<?php   include_once('../templates/tpl_common.php'); ?>

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

<div id="register_content">


<h1> Create a new account </h1>

 <form method="post" action="../actions/action_register.php" class="register_form">
      <input type="text" name="firstname" placeholder="first name" required>
      <input type="text" name="lastname" placeholder="last name" required>
      <input type="radio" name="gender" placeholder="gender" required>
      <select name="country" required>
        <?php select_country() ?>
      </select>
      <input type="date" value="2018-12-21" min="1903-01-01" max="2005-01-01" required>
      <input type="text" name="username" placeholder="username" maxlength="8" required>
      <input type="password" name="password" placeholder="password" required>
      <input type="password" name="repeatpassword" placeholder="confirm password" required>   
      <input type="submit" value="Register">
 </form>

 <p>Already have an account?</p>
    <a href="login.php" class="login_form">Login here.</a>
 </div>

<footer>
<!-- dividir depois tudo em tpl_head e footer-->
</footer>

</html>

