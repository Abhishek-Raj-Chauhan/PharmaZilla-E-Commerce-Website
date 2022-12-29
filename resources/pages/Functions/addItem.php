<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link rel="stylesheet" href="../../text/Css/admin.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-14/css/all.min.css"
      integrity="sha512-YVm6dLGBSj6KG3uUb1L5m25JXXYrd9yQ1P7RKDSstzYiPxI2vYLCCGyfrlXw3YcN/EM3UJ/IAqsCmfdc6pk/Tg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div>
<h1>Welcome to Admin mode!</h1>

<div class="adder">
  <form method="POST" action="">
    <input type="text" name="Product_name" placeholder="Product Name...">
    <input type="text" name="Product_cap" placeholder="Product Caption...">
    <input type="number" name="Stock" placeholder="Stock Available...">
    <input type="number" name="Cost" placeholder="Cost per product..."><br>
    <label for="tablet">Tablet<input type="radio" name="Category" placeholder="Category..." id="tablet" value="Tablet"></label>
    <label for="cream">Cream<input type="radio" name="Category" placeholder="Category..." id="cream" value="Cream"></label>
    <label for="syrup">Syrup<input type="radio" name="Category" placeholder="Category..." id="syrup" value="Syrup"></label>
    <label for="vaccine">Vaccine<input type="radio" name="Category" placeholder="Category..." id="vaccine" value="Vaccine"></label>
    <label for="supplement">Supplement<input type="radio" name="Category" placeholder="Category..." id="supplement" value="Supplement"></label>
    <label for="other">Other Category<input type="radio" name="Category" placeholder="Category..." id="other" value="Other"></label><br>
    <input type="submit" name="submit" value="Add new Item">
</form>
</div>
<?php
if(isset($_POST["submit"])){
include "../../text/Php/accessItem.php";
$productName=$_POST["Product_name"];
$productCaption=$_POST["Product_cap"];
$stock=$_POST["Stock"];
$cost=$_POST["Cost"];
$category=$_POST["Category"];
$pid=rand(1,99999);
$t = 0;
$res=mysqli_query($con,"INSERT INTO product_details (Product_Id,Stock,Cost,Category,Product_Name,Product_caption,tempCount) VALUES ('$pid','$stock','$cost','$category','$productName','$productCaption','$t')");
$_SESSION['msg']="Last Change=> added a new product '$productName'";
echo "<script>alert('added new item')</script>";
header("Location: admin.php");
}?>
<div class="tableHold"></div>
<a href="admin.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>
 
</body>
</html>