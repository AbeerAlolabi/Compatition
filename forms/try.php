<?php

$fullName = $_POST['suggestion'];
if(!empty($fullName)){
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
        $sql="INSERT INTO tourist (fullName) VALUES('$fullName');";

        $result=mysqli_query($conn,$sql);
        if($result==true){
            echo "<script> alert('Welcome, Now Log In To Post Your Furniture');</script>";
            header("Location: ../index.html?signup=success");
        
            }else{
                echo "<script> alert('Error, All field are required'); </script>";
                header("Location: ../IndigenousSignup.html");}
    
    die();}}
?>