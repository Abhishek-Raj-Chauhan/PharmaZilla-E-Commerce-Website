<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pharmaz';
$dtcr = new mysqli($servername,$username,$password,$dbname);
if($dtcr->connect_error){
    die('Connection Failed'.$dtcr->connect_error);
}

// $sql = 'CREATE DATABASE pharmaz';
// if($dtcr->query($sql)===TRUE){
//     echo 'DATABASE CREATED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR CREATING DATABASE'.$dtcr->error;
// }
// $sql = 'CREATE TABLE entry_log(User_Id INTEGER(10000),User_Name VARCHAR(20),Password VARCHAR(20),Age INTEGER(10),Work VARCHAR(20),Gender VARCHAR(20),Address VARCHAR(50),DOB DATE);';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE CREATED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR CREATING TABLE'.$dtcr->error;
// }
// $sql = 'CREATE TABLE purchase_history (User_ID INTEGER(255),Cost INTEGER(255));';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE CREATED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR CREATING TABLE'.$dtcr->error;
// }
// $sql = 'CREATE TABLE product_details(Stock INTEGER(255),Cost INTEGER(255),Category VARCHAR(20),Product_Name VARCHAR(20),Product_caption VARCHAR(20));';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE CREATED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR CREATING TABLE'.$dtcr->error;
// }
// $sql = 'ALTER TABLE product_details ADD COLUMN tempCount INTEGER(20);';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE ALTERED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR ALTERING TABLE'.$dtcr->error;
// }
// $sql = 'ALTER TABLE product_details ADD COLUMN Product_Id INTEGER(255);';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE ALTERED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR ALTERING TABLE'.$dtcr->error;
// }
// $sql = 'CREATE TABLE cart_list (User_ID INTEGER(255), Product_ID INTEGER(255), Number INTEGER(255));';
// if($dtcr->query($sql)===TRUE){
//     echo 'TABLE CREATED SUCCESSFULLY';
// }
// else{
//     echo 'ERROR CREATING TABLE'.$dtcr->error;
// }
$sql = 'DELETE FROM product_details WHERE Cost=110';
if($dtcr->query($sql)===TRUE){
    echo 'TABLE CREATED SUCCESSFULLY';
}
else{
    echo 'ERROR CREATING TABLE'.$dtcr->error;
}
$dtcr->close();
?>