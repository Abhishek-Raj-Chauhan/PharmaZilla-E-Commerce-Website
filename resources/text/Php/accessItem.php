<?php
session_start();
$con=mysqli_connect("localhost","root","","pharmaz");


$tabletQuery="select * from product_details where Category ='Tablet'";
$vaccineQuery="select * from product_details where Category='Vaccine'";
$syrupQuery="select * from product_details where Category='Syrup'";
$creamQuery="select * from product_details where Category='Cream'";
$supplementQuery="select * from product_details where Category='Supplement'";
$otherQuery="select * from product_details where Category='Other'";
if(!isset($_SESSION['msg']))
{$_SESSION['msg']="";}
?>

