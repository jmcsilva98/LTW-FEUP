
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

<body>

    <div class="login_container">

     <div class="login_header">
        <header>
        </header>
     </div>

     <div class="login_logo">
           <p>  <img src="../assets/nabi.png" alt="Nabi logo (butterfly)">  nabi </p>
         
    </div>
    
    
    <div class="login_form">

    <form method="post" action="../actions/action_login.php" >
         <input type="text" name="username" placeholder="username" required>
         <input type="password" name="password" placeholder="password" required>
         <input type="submit" value="Login">
    </form>

     </div>

    <div class="login_register_link">
        <p>Don't have an account? <a href="register.php">Sign up here.</a></p>
    </div>

    <div class="login_footer">
    <footer>
        <p> &#169; FEUP 2018 Web Languages and Technologies | Made by Rita Norinho and Joana Silva  </p>
    </footer>
    </div>
   
    </div>



