<?php
$serverName = "localhost";
$userName  = "root";
$password = "";
$dbname = "test";


$con = mysqli_connect($serverName,$userName,$password,$dbname);
if(mysqli_connect_errno()){
    echo"failed connection!";
    exit();
}
echo"connection success!";
?>