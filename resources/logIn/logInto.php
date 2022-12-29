<?php
session_start();
$con=mysqli_connect("localhost","root","","pharmaz");

$name=$_POST["name"];
$pass=$_POST["pass"];
$name = stripcslashes($name);  
$pass = stripcslashes($pass);  
$name = mysqli_real_escape_string($con, $name);  
$pass = mysqli_real_escape_string($con, $pass);  
$readQuery="select * from entry_log where User_Name = '$name' and Password = '$pass'";
$result=mysqli_query($con,$readQuery);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_row($result);

if($count==1)
{
    $_SESSION["userId"]=$row[0];
    $_SESSION["name"]=$row[1];
    echo "console.log(".$name.")";
    header("Location: ../user/index.php");   
}
else{
    header("Location: logIn2.html");
    exit;
}

?>