<?php
include '../../text/Php/accessItem.php';
$get=mysqli_query($con,"UPDATE product_details SET tempCount=0");
session_start();
session_destroy();
header("Location: ../../../index.html")
?>