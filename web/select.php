<?php
$con=mysqli_connect("localhost","root","","sampledba");
$un=$_POST['username'];
$pwd=$_POST['Password'];
$sql="select * from register2 where username='$un' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count>0){
 header("location:index.html");
    echo 'onclick=alert("welcome")';


}
else{
    header("location:login.php");
}
?>