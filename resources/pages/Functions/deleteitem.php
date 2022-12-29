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

<div>
  <form method="POST" action="">
    <label for="productID">Product ID:<input type="number" name="productID" placeholder="Enter the Product ID"></label>
    <input type="submit" name="submit" value="Delete!">
  </form>
</div>
<?php 
include "../../text/Php/accessItem.php";
if(isset($_POST["submit"])){
$prodId=$_POST["productID"];
$res=mysqli_query($con,"select Product_Name from product_details where Product_Id='$prodId'");
$row=mysqli_fetch_array($res);
$del=mysqli_query($con,"delete from product_details where Product_Id='$prodId'");
$_SESSION['msg']="Last Change=> deleted product '$prodId'";
header("Location: admin.php");
}?>

<div>
  <table style="height:60vh">
    <thead>
      <td>Product ID</td>
      <td>Product Name</td>
      <td>Stock</td>
      <td>Product caption</td>
    </thead>
    <tbody>
    <?php 
    $rest=mysqli_query($con,"SELECT Product_ID, Product_Name, Stock,Product_caption from product_details order by Product_ID desc");
    while($rown=mysqli_fetch_array($rest)){
    $pid=$rown[0];
    $name=$rown[1];
    $stock=$rown[2];
    $cap=$rown[3];
    echo "<tr><td>".$pid."</td><td>".$name."</td><td>".$stock."</td><td>".$cap."</td></tr>";
    }
    ?>
    </tbody>
  </table>
  </div>
<a href="admin.php" class="back"><i class="fas fa-arrow-circle-left fa-5x"></i></a>
</div>

</body>
</html>