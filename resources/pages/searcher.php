<?php
    include 'C:/xampp/htdocs/pharma/resources/text/Php/accessItem.php';
    include 'C:/xampp/htdocs/pharma/resources/user/index.php';
    include 'C:/xampp/htdocs/pharma/resources/text/Js/shop/tabShift.js';
    $user=$_SESSION["userId"];
    $search = $_POST['search'];
    $a = $_POST['search'];
    $storeExisting=mysqli_query($con,"select Product_Name from product_details WHERE Product_Name='$a'");
    $store2=mysqli_query($con,"select Category from product_details WHERE Product_Name='$a'");
    $riw = mysqli_fetch_row($store2);
    $i=0;
    while($rowResult=mysqli_fetch_row($storeExisting)){
    if($search==$rowResult[$i]){
        echo "<script> 
        var x = document.getElementById('searsub');
        window.location.href='shop.php';
        body.onload=changeTab('$riw[0]','cream');
        </script>";
        
    }
    else if($search!=$rowResult[$i]){
        header("Location: ../shop.php");
    }
    $i++;
}
// header("Location: ../shop.php");
    
?>