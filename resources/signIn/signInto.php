<?php
// include 'resources\signIn\signIn.js';
$conn=new mysqli("localhost","root","","pharmaz");
$connect = mysqli_connect("localhost","root","","pharmaz");
$id = rand(1,10000);
$name=$_POST["name"];
$pass=$_POST["pass"];
$conf=$_POST["confpass"];
$age=$_POST["age"];
$work=$_POST["work"];
$gen=$_POST["gen"];
$bday=$_POST["bday"];
$address=$_POST["ad1"]." | ".$_POST["ad2"]." | ".$_POST["city"]." | ".$_POST["state"]." | ".$_POST["cou"];


$insertQuery = "INSERT INTO entry_log (User_Id,User_Name,Password,Age,Work,Gender,Address,DOB) VALUES ('$id','$name','$pass','$age','$work','$gen','$address','$bday')";
if(mysqli_query($connect,$insertQuery)){
    echo '<script>
    var x = document.getElementById("h");
    function al(){
        alert("Registered Successfully!!");
    }
    window.onload(al())</script>';
    header("Location: ../../index2.html");
}
else{
    echo "error". mysqli_error($link);
    echo "please restart the server there may be error blocking your sign in process!";
}
?>