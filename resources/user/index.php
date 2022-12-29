<!doctype html>
<html>
<head>

<title>PharmaZilla</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- stylesheets -->
<link rel="stylesheet" href="../text/Css/main.css">
<link rel="stylesheet" href="../text/Css/bulma-customized.css">
<link rel='stylesheet' href='../text/Css/HomeStyle.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- end of stylesheets -->

<style>
    /* #hjk{
        padding-right: 10px;
    } */
</style>
</head>
<body id = "indexer">
  
 <a id="top"></a>   
 <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li class="myaccount"><a href="..\pages\profile.php"><span>My Account</span></a></li>
            <li class="wishlist"><a href="..\pages\cart.php"><span>My Cart</span></a></li>
            <li class="header_cart hidden-xs"><a href="..\pages\shop.php"><span>Shop</span></a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
<header class="theme-light">
    <div class="titleCard">
        <div id="titler">
            <div class = "titler"><div class = "logo"><img id="log" width="268px"src="../text/Css/logo.png"></div></div>
            <div class="searcher">
                <form action="searcher.php" id = "formse" method = "post">
                    <input id = "sear" type="text" placeholder="Search Medicines & Healthcare Products.." name="search">
                    <button id = "searsub" type="submit" value="Search"><i id = "hjk" class="fa fa-search" aria-hidden="true"></i></button>
                    <!-- <input type="submit" id ="searsub" value="Search"> -->
                </form>
            </div>
        </div>
    </div>
<nav class="theme-light">
    <ul>
        <li><a href="#top" ><i class="fas fa-home fa-3x"></i><span class="hidden navTag">Home</span></a></li>
        <li><a href="../pages/shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="../pages/cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="../pages/profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="../pages/contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="../pages/settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<main class="theme-light">
    
  
<div class="WelcomeMsg" id="WelcomeMsg">
    <div class = "all">
    <div class="user">
    <h3 class="nameUser">Hi! <?php session_start(); echo ucfirst($_SESSION["name"])?></h3>
    <h1 id ="yh">Welcome to PharmaZilla!</h1>
    </div>
    <div class = "imh">
        <img src = "loj.jpg">
      </div>
  </div>
    <!-- insert the introduction of the project in this area -->
    <BR><BR>
    <div class="poster">
      <div class="fade">

        <!-- Full images with numbers and message Info -->
        <div class="Containers">
          <img src="../text/Css/sale.jpg" style="width:100%;border-radius: 10px;">
        </div>
        <div class="Containers">
          <img src="../text/Css/sale4.jpg" style="width:100%;border-radius: 10px;">
        </div>
        <div class="Containers">
          <img src="../text/Css/sale3.jpg" style="width:100%;border-radius: 10px;">
        </div>
      
        <!-- Back and forward buttons -->
        <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
        <a class="forward" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The circles/dots -->
      <div style="text-align:center">
        <span class="dots" onclick="currentSlide(1)"></span>
        <span class="dots" onclick="currentSlide(2)"></span>
        <span class="dots" onclick="currentSlide(3)"></span>
      </div> 
    </div>

</main>
</div>
<footer class="theme-light flex-row">
    <ul>
    <li><a href="https://www.google.com" target="_blank"><i class="fab fa-google fa-0.8x"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
        <li><a href="https://www.linkedin.com/signup" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <div class="fut"> <h1 class="futer">@2022 PharmaZilla. All Rights Reserved</h1></div>
</footer>
<script src='C:\xampp\htdocs\pharma\resources\text\Js\scripts.js'></script>
<script src='C:\xampp\htdocs\pharma\resources\text\Js\theme.js'></script>
<script src='../text/Js/shop/tabShift.js'></script>

</body>
<script>
  var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
} 
var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.animation ="fadee 3.0s"
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 3000); // Change image every 2 seconds
} 
</script>
</html>
