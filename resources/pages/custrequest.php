<?php
    include 'C:/xampp/htdocs/pharma/resources/text/Php/accessItem.php';
    include 'C:/xampp/htdocs/pharma/resources/pages/contact.php';
    // include 'C:/xampp/htdocs/pharma/resources/text/Js/shop/tabShift.js';
    $user=$_SESSION["userId"];
    $a = $_POST['name1'];
    $b = $_POST['email1'];
    $c = $_POST['phone1'];
    $d = $_POST['message1'];
    $res1=mysqli_query($con,"INSERT INTO customerreq (name,email,phone,message) VALUES ('$a','$b','$c','$d')");
    
?>