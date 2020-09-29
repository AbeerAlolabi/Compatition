<?php

$fullName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$availabDate = $_POST['date'];
$birthDate = $_POST['birth'];
$edu = $_POST['edu'];
$country = $_POST['country'];
$city = $_POST['city'];
$message = $_POST['message'];

if(!empty($fullName)||!empty($email) || !empty($phone) || !empty($availabDate) || !empty($birthDate) || !empty($edu) || !empty($country) || !empty($city) || !empty($message)){
    $host="sql113.epizy.com";
    $dbUsername="epiz_26831751";
    $dbPassword="f9CEKixnK92fo";
    $dbName="epiz_26831751_citizen";
    //creat connection

    $conn= mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
   
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        isset($_POST['submit']);
        $sql="INSERT INTO citizen (fullName, email, phone, availabilityDate, birthDate,edu,country, city, message) VALUES('$fullName','$email','$phone','$availabDate','$birthDate','$edu','$country', '$city','$message');";

        $result=mysqli_query($conn,$sql);
        if($result==true){
            echo "<script> alert('You have successfully completed the registration process');</script>";
            echo  "<script>window.open('http://puretour.rf.gd/index.html')</script>";
            
            }else{
                echo "<script> alert('Error, All field are required'); </script>";
                header("Location : ../IndigenousSignup.html");}
    
    die();}}
?>