<?php
    include 'C:/xampp/htdocs/pharma/resources/text/Php/accessItem.php';
    // include 'C:/xampp/htdocs/pharma/resources/user/index.php';
    include 'C:/xampp/htdocs/pharma/resources/text/Js/shop/tabShift.js';
    $user=$_SESSION["userId"];
    $search = $_POST['search'];
    $a = $_POST['search'];
    $storeExisting=mysqli_query($con,"select Product_Name from product_details WHERE Product_Name='$a'");
    $store2=mysqli_query($con,"select Category from product_details WHERE Product_Name='$a'");
    $riw = mysqli_fetch_row($store2);
    $i=0;
    $cout=0;
    while($rowResult=mysqli_fetch_row($storeExisting)){
    if($search==$rowResult[$i]){
        header("Location: ../user/shop.php");
        $cout=1;
    }
    // if($search!=$rowResult[$i]){
    //     header("Location: ../shop2.php");
    // }
    $i++;
}
if($cout==0){
    header("Location: ../user/shop2.php");
}

?>