<?php


$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="chamaa db";



$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if($con){
   
        }
else{
     die(mysqli_error($con));
     }
?>
