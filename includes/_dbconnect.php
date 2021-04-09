<?php

$servername="localhost";
$username="root";
$password="";
$dbname="employees";

//create database connection 

$con=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_error()){
    echo" a error";
}
else{
    echo " connection created successfully";
}




?>