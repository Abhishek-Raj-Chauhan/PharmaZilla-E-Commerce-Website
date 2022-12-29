<?php
include 'C:\xampp\htdocs\pharma\resources\text\Php\accessItem.php';
$userId=$_SESSION["userId"];
// include 'C:/xampp/htdocs/PharmaZilla/resources/text/Php/accessUser.php';
$storeExistingTemp=mysqli_query($con,"select * from cart_list WHERE User_ID='$userId'");
while($rowResult=mysqli_fetch_row($storeExistingTemp)){
$updateTempCount=mysqli_query($con,"Update product_details SET tempCount=0 WHERE Product_ID='$rowResult[2]'");}
$get=mysqli_query($con,"delete FROM cart_list where User_ID='$userId'");
header("Location: ../cart.php")
?>