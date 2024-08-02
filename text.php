<?php
$username=$_POST['unmae'];
$password=$_POST['pword'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mail=$_POST['mail'];
$phno=$_POST['phno'];

$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="insert into game values('$username','$password','$dob','$gender','$mail',$phno,0);
if(mysqli_query($con,$sql)){
}
else{
header('location:create.html,error:insufficienrv data');
}


?>