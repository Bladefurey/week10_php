<?php
    $dbServerName="localhost";
    $dbUserName="root";
    $dbPassword="";
    $dbName="university";
    $connection=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
    if(!$connection){
        die("Connection Fail! ".mysqli_connect_error());
    }
?>