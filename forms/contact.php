<?php

$fullName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$arrivingDate = $_POST['date'];
$countryif(isset($_POST['country'])){
$country = $_POST['$country '];
$city = $_POST['city'];
$message = $_POST['message'];

if(!empty($fullName)||!empty($email) || !empty($phone) || !empty($arrivingDate) || !empty($country) || !empty($city)){
    $host="sql113.epizy.com";
    $dbUsername="epiz_26831751";
    $dbPassword="f9CEKixnK92fo";
    $dbName="epiz_26831751_tourist";
    //creat connection

    $conn= mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
   
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        isset($_POST['submit']);
        $sql="INSERT INTO tourist (fullName, email, phone, arrivingDate, country, city, comment) VALUES('$fullName','$email','$phone','$arrivingDate','$country', '$city','$message');";

        $result=mysqli_query($conn,$sql);
        if($result==true){
            echo "<script> alert('Welcome, Now Log In To Post Your Furniture');</script>";
            header("Location: ../index.html?signup=success");
        
            }else{
                echo "<script> alert('Error, All field are required'); </script>";
                header("Location: ../IndigenousSignup.html");}
    
    die();}}
?>