<?php
    $dbServerName="localhost";
    $dbUserName="root";
    $dbPassword="";
    $dbName="university";
    $con=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    if(!$con){
        die("Connection failed: ".mysqli_connect_error());
    }
?>