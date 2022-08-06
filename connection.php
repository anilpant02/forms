<?php

$server="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect ($server,$username,$password,$dbname);

if(!$conn){
    die("sorry connection failed" . mysqli_connect_error())
;}
else{
    echo"<br>connection was successful";

}
?>