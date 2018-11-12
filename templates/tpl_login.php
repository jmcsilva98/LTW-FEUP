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

   <div id="login_content">

   <img src="../assets/nabi.png" alt="Nabi logo (butterfly)">
   <h1> nabi </h1>

    <form method="post" action="../actions/action_login.php" class="login_form">
         <input type="text" name="username" placeholder="username" required>
         <input type="password" name="password" placeholder="password" required>
         <input type="submit" value="Login">
    </form>

    <p>Don't have an account?</p>
    <a href="register.php" class="register_form">Sign up here.</a>

    </div>


<footer>
<!-- dividir depois tudo em tpl_head e footer-->
</footer>

</html>


