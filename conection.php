<?php 
 $con=mysqli_connect("localhost","root","","pointofstudy");
 if($con->connect_error){
    die("conection failed !".$con->connect_error);  
 }
?>