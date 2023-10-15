<?php 
include "db.php";
$con=mysqli_connect("localhost","root","","sampledba");
$un=$_POST['username'];
$mn=$_POST['mobile'];
$pwd=$_POST['password'];
$dob=$_POST['dob'];
$email=$_POST['email'];

$sql="insert into register2(Username,Email,DOB,MOBILENUMBER,Password) 
values('$un','$email','$dob','$mn','$pwd')";

$result=mysqli_query($con,$sql);
if ($result){
    header( "location:login.html");
}

?>