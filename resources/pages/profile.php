<!doctype html>
<html>
<head>

<title>Your Profile</title>
<?php include '../text/Php/accessUser.php';?>
<link rel="stylesheet" href="../text/Css/main.css">
<link rel="stylesheet" href="../text/Css/bulma-customized.css">
<link rel='stylesheet' href='../text/Css/HomeStyle.css'>
<link rel='stylesheet' href='../text/Css/Profile.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css" integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
        <li><a href='../user/index.php'  ><i class="fas fa-home fa-3x"></i><span class="hidden navtag">Home</span></a></li>
        <li><a href="shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="#top" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="contact.php" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<main>
    <fieldset STYLE="min-height:50vh;">
        <legend>Your Profile:</legend>
        <span class="profileSpan">Name:<input type="text" id="name" name="name" value="<?php echo $_SESSION["name"]?>" disabled></span>
        <span class="profileSpan">Age:<input type="text" id="age" name="age" value="<?php echo $_SESSION["age"]?>" disabled></span>
        <span class="profileSpan">Work:<input type="text" id="work" name="work" value="<?php echo $_SESSION["work"]?>" disabled></span>
        <span class="profileSpan">Address:<input type="text" class="marquee" id="address" name="address" value="<?php echo $_SESSION["address"]?>" disabled></span>
        <span class="profileSpan">Amount Paid:<input type="number" id="amtPaid" name="amtPaid" value="<?php echo $_SESSION["amount"]?>" disabled></span>
    </fieldset>



</main>
<footer class="theme-light flex-row">
    <ul>
    <li><a href="https://www.google.com" target="_blank"><i class="fab fa-google fa-0.8x"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
        <li><a href="https://www.linkedin.com/signup" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <div class="fut"> <h1 class="futer">.A PharmaZilla product.</h1></div>
</footer>
<script src='C:\xampp\htdocs\pharma\resources\text\Js\scripts.js'></script>
<script src='C:\xampp\htdocs\pharma\resources\text\Js\theme.js'></script>
<script>
    console.log(<?php $_SESSION["name"]?>);
    console.log("hi boii");
</script>
</body>
<script src='../text/Js/scripts.js'></script>
<script src='../text/Js/theme.js'></script>
</html>