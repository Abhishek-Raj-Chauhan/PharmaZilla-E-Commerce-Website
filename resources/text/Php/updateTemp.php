<?php

include 'accessItem.php';


$count=$_POST["count"];
$id=$_POST["pid"];
$out=mysqli_query($con,"UPDATE product_details SET tempCount = '$count'  WHERE Product_Id='$id'");
$userid=$_SESSION['userId'];
$result= mysqli_query($con,"select * from cart_list where User_Id='$userid' AND Product_ID='$id'");
if(mysqli_num_rows($result)==0){
$in=mysqli_query($con,"INSERT INTO cart_list (User_ID, Product_ID, Number) VALUES ('$userid','$id','$count')");
}
else
{
$in=mysqli_query($con,"UPDATE cart_list SET Number='$count' where User_ID='$userid' AND Product_ID='$id'");
}

$checkZero=mysqli_query($con,"DELETE from cart_list where User_Id='$userid' AND Product_ID='$id' AND Number=0");
?>