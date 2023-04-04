<?php
session_start();

if (!isset($_SESSION["uid"])) {
    header("Location: ../index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Touristic Atrractions</title>
  <link rel="icon" href="../Lebanese_Flag.ico">
  <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet"href="../CSS/Tourism.css">
  <!--Burger Icon-->
  <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

</head>
<body>
  <script>
    const key = "Openheimer"
    const value = sessionStorage.getItem("uid");
    console.log(value)
    const decrypted = CryptoJS.AES.decrypt(value,key).toString(CryptoJS.enc.Utf8);;
    console.log(decrypted);
    if(value == ""){
      document.location.href="../index.html"
    }
    
  </script>
  <!-- Start of HTML and NavBar-->
  <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand">Unified</a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.html">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.html">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.html">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.html">Transportation</a></li>
             <li class="menu-item"><a class="menu-link" href="./SignUp.html">Sign Up/ Log In</a></li>
          </ul>
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
       </div>
    </nav>
 </header>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  
<script>    function run(){
  alert("You must be logged-in to mark a place as visited");
  let input = document.getElementById('scales');
  input.checked = false;
}</script>
  <!--Cards-->
  <br>
  <div class="cards">
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Anjar1.jpg"/>
      </div>
      <div class="card-title">
        </a>
        <h2>
          
          <a href="./Anjar.html"target="_blank">Anjar</a>  &#11049; <a href="https://whc.unesco.org/en/list/293/"> More Info</a>
          
        </h2>
      <small>Also consider going to <a href="https://goo.gl/maps/4EobUP5eoFAT4Gru5">Baalbek.</a></small>
      <div>
        <input type="checkbox" id="scales" name="scales" onclick="run()">
        <label for="scales"><small>Visited</small></label>
      </div>
    </div>  
    </div>
    
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Baalbek.jpg" />
      </div>
      <div class="card-title">
        <h2>
          
          <a href="./Baalbek.html"target="_blank">Baalbek</a> &#11049; <a href="https://whc.unesco.org/en/list/294/"> More Info</a>
          </h2>
          <small> Extra things to do in Baalbek: <a href="https://goo.gl/maps/WJYxUuZ1TvgptTbF8"target="_blank">Ksara Winery</a> 	&#11049; <a href="https://www.tripadvisor.com/Restaurant_Review-g295421-d12029253-Reviews-Lakkis_Farm_Restaurant-Baalbeck_Bekaa_Governorate.html"> Eat Sfiha</a></small>
          <div>
            <input type="checkbox" id="scales" name="scales" onclick="run()">
            <label for="scales"><small>Visited</small></label>
          </div>
       
      </div>
     
    </div>
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Beiteddine.png" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          
           <a href="./BeitEddine.html"target="_blank">BeitEddine</a> &#11049; <a href="https://www.lonelyplanet.com/lebanon/south-of-beirut/chouf-mountains/attractions/beiteddine-palace/a/poi-sig/1459395/361103"> More Info</a>
          </h2>
          <small>Also go to: <a href="https://goo.gl/maps/nCbCgh2M9NcVe4Q87">Deir El Qamar</a></small>
          <div>
            <input type="checkbox" id="scales" name="scales" onclick="run()">
            <label for="scales"><small>Visited</small></label>
          </div>
      </div>
      
    </div>
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Byblos.jpg" />
      </div>
      <div class="card-title">
        <h2>
          
          <a href="./Byblos.html"target="_blank">Byblos</a>  &#11049; <a href="https://whc.unesco.org/en/list/295/"> More Info</a>
          
        </h2>
        <small>Extra things to do in: <a href="https://www.the961.com/12-things-to-do-in-the-historical-city-of-jbeil/"> Jbeil</a></small>
        <div>
          <input type="checkbox" id="scales" name="scales" onclick="run()">
          <label for="scales"><small>Visited</small></label>
        </div>
      </div>
    </div>

  
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Kadisha.png"/> 
      </div>
      <div class="card-title">
        
        <h2>
        
          <a href="./Kadisha.html"target="_blank">Kadisha Valley</a> &#11049; <a href="https://whc.unesco.org/en/list/850/"> More Info</a>
          
          
        </h2>
        <small>This picture was extracted from: <a href="https://www.nationalgeographic.com/travel/article/qadisha-valley-mountain-hermit-dario-escobar"target="_blank">National Geographic</a></small>
        
      <small><br>Also consider going to: <a href ="https://goo.gl/maps/TAP9s9C6guwoUTBZ8">Ceders Mountain</a></small>
      
      <div>
        <input type="checkbox" id="scales" name="scales" onclick="run()">
        <label for="scales"><small>Visited</small></label>
      </div>
    </div>
      
    </div>
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/MIM.jpg"/> 
      </div>
      <div class="card-title">
        
        <h2>
        
          <a href="https://goo.gl/maps/SEyRCceHsK1mqwe18"target="_blank">Mineral Museum</a> &#11049; <a href="https://www.mim.museum/"> More Info</a>
          
          
        </h2>
        <small>This picture was extracted from MIM's website</a></small>
        
      <small><br>Also consider going to: <a href ="https://goo.gl/maps/MHjovZ5E9QF2ifDo6">The Nationl Museum in Beirut</a></small>
      <div>
        <input type="checkbox" id="scales" name="scales" onclick="run()">
        <label for="scales"><small>Visited</small></label>
      </div>
    </div>
      
    </div>

    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/NMB.jpg"/> 
      </div>
      <div class="card-title">
        
        <h2>
        
          <a href="https://goo.gl/maps/MHjovZ5E9QF2ifDo6"target="_blank">National Museum</a> &#11049; <a href="https://www.instagram.com/nationalmuseumbeirut/?hl=en"> More Info</a>
          
          
        </h2>
        <small>Extra things to do in Beirut: <a href="https://www.lebanontraveler.com/en/magazine/lebanese-national-library/">National Library</a></small>
        <br>
        <small>Also  consider going to: <a href="https://www.aub.edu.lb/museum_archeo/Pages/default.aspx">AUB's Archaeological Museum</a></small>
        <div>
          <input type="checkbox" id="scales" name="scales" onclick="run()">
          <label for="scales"><small>Visited</small></label>
        </div>
      </div>
      
    </div>
  
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Heritage/Tyre.png"  />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          
          <a href="https://goo.gl/maps/NkdvCouFXvoDz1xr7"target="_blank">Tyre </a> &#11049; <a href="https://whc.unesco.org/en/list/299/"> More Info</a></small>
          </h2>
          <small>Image from britannica: <a href="https://www.britannica.com/place/Tyre"target="_blank">Link</a> 
          <br>
          <small> More to see in Tyre: <a href="https://lebanonexplorer.com/15-best-things-to-do-in-tyre-lebanon/"target="_blank">Link</a> </small> 
          <div>
            <input type="checkbox" id="scales" name="scales" onclick="run()">
            <label for="scales"><small>Visited</small></label>
          </div>
      </div>
    </div> 
    </div>
  
  </div>
  <!-- End of Card Layout-->
</body>
</html>
<!--End of HTML page-->