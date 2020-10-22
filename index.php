<!-- PHP Server (Connection to database) -->
<?php require('assests/php/server.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Details -->
    <title>My Website | Home</title>  
    <meta charset="utf-8">
    
    <!-- Styles -->
    <link rel='stylesheet' type='text/css' href='assets/css/stylesheet.css' />
    
    <!-- Scripts -->
    <script type="text/javascript" href="assets/js/script.js"></script>
  </head>
  <body>
    <header>
      <!-- Navigation Menu -->
      <nav>
        <!-- Left -->
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Gallery</a>
        <a href="#">Contact</a>
        
        <!-- Right -->
        <a href="#" style="float: right;">Sign Up</a>
        <a href="#" style="float: right;">Login</a>
      </nav>
    </header>
  </body>
</html>

<?php
// Copyright Details

$licence = ('licence.php');
  require($licence); 
    if(emtpy($licence)) {
      header("Location: /auth/index.php", true, 301);
      exit();
     } else {
     echo "Software Successfully Authenticated";
    ?>
