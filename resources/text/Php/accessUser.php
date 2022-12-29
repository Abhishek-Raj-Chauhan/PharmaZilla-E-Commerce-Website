<?php
session_start();
$con=mysqli_connect("localhost","root","","pharmaz");

$userId=$_SESSION["userId"];
$readQuery="select * from entry_log where User_Id = '$userId'";
$amountQuery="select SUM(Cost) from purchase_history where User_Id = '$userId'";
$result=mysqli_query($con,$readQuery);
$amount=mysqli_query($con,$amountQuery);
$row=mysqli_fetch_row($result);
$total=mysqli_fetch_row($amount);
$_SESSION["userId"]=$row[0];
$_SESSION["name"]=$row[1];
$_SESSION["age"]=$row[3];
$_SESSION["work"]=$row[4];
$_SESSION["gender"]=$row[5];
$_SESSION["address"]=$row[6];
$_SESSION["dob"]=$row[7];
$_SESSION["amount"]=$total[0];
if(!isset($_SESSION['msg']))
{$_SESSION['msg']="";}
?>

