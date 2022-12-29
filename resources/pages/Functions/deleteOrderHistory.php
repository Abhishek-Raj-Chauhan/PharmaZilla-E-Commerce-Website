<?php
include 'C:\xampp\htdocs\pharma\resources\text\Php\accessItem.php';
$userId=$_SESSION["userId"];
$get=mysqli_query($con,"delete FROM purchase_history where User_ID='$userId'");
$_SESSION["amount"]=0;
header("Location: ../profile.php")
?>