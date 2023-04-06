<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map - UULebanon </title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet"href="../CSS/Lebanon.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

    </head>
    <!-- Start of HTML and NavBar-->
    <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>
             <li class="menu-item"><a class="menu-link" href="./SignUp.php">Sign Up/ Log In</a></li>
          </ul>
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
          <div id="search-results"></div>
       </div>
       
    </nav>
 </header>


  
  
    <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>
  <br>
  <br>
  <br>
  <br>
    <!--https://www.google.com.qa/maps/d/-->
    
    <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=1Ly1TatB7RWT20NFJRevhY_2Mjb_2iGI&ehbc=2E312F" width="100%" height="780px"></iframe>
</body>
</html>