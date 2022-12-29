<!doctype html>
<html>
<head>

<title>Contact us</title>
<link rel="stylesheet" href="../text/Css/main.css">
<link rel="stylesheet" href="../text/Css/bulma-customized.css">
<link rel='stylesheet' href='../text/Css/HomeStyle.css'>
<link rel='stylesheet' href='../text/Css/universal.css'>
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css' integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!-- <link rel="stylesheet" type="text/css" href="css/util2.css"> -->
<link rel="stylesheet" type="text/css" href="css/main2.css">
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
        <li><a href='../user/index.php' ><i class="fas fa-home fa-3x"></i><span class="hidden navtag">Home</span></a></li>
        <li><a href="shop.php" ><i class="fas fa-store-alt fa-3x"></i><span class="hidden navtag">Shop</span></a></li>
        <li><a href="cart.php" ><i class="fas fa-shopping-cart fa-3x"></i><span class="hidden navtag">Cart</span></a></li>
        <li><a href="profile.php" ><i class="far fa-id-badge fa-3x"></i><span class="hidden navtag">Profile</span></a></li>
        <li><a href="#top" ><i class="fas fa-envelope fa-3x"></i><span class="hidden navtag">Contact Us</span></a></li>
        <li><a href="settings.php" ><i class="fas fa-sliders-h fa-3x"></i><span class="hidden navtag">Settings</span></a></li>
    </ul>
</nav>
</header>
<div class="mainer">
    <div class="wrap-contact100">
        <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
            <span class="contact100-form-title-1">
                Contact Us
            </span>

            <span class="contact100-form-title-2">
                Feel free to drop us a line below!
            </span>
        </div>

        <form method = "post" action ="custrequest.php" class="contact100-form validate-form">
            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Full Name:</span>
                <input class="input100" type="text" name="name1" placeholder="Enter full name">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Email:</span>
                <input class="input100" type="text" name="email1" placeholder="Enter email addess">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Phone is required">
                <span class="label-input100">Phone:</span>
                <input class="input100" type="text" name="phone1" placeholder="Enter phone number">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <span class="label-input100">Message:</span>
                <textarea class="input100" name="message1" placeholder="Your Comment..."></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- <main>
<fieldset><legend>Email</legend>
    <h5>Mail us at:</h5>
    <a href="abhi9411917368@gmail.com">pharmaZilla@gmail.com</a></fieldset>
<fieldset><legend>Phone No:</legend>
        <h5>Contact us at:</h5>
        <a href="+91 8445402001">+0581 245632</a>
</fieldset>
<fieldset><legend>Phone No:</legend>
        <h5>For urgent product request :</h5>
        <a href="+91 8445402001">+91 8445402001</a>
</fieldset>
<fieldset><legend>Follow us on Social medias:</legend>
    <ul class="flexRow">
    <li><a href="https://www.google.com" target="_blank"><i class="fab fa-google fa-0.8x"></i></a></li>
        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
        <li><a href="https://www.linkedin.com/signup" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
</fieldset>
</main> -->
<footer class="theme-light">
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
</body>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main2.js"></script>
</html>