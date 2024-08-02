<?php
session_start();
$username=$_SESSION['uname'];
$password=$_POST['pword'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mail=$_POST['mail'];
$phno=$_POST['phno'];

$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="update game set pword='$password',dob='$dob',gender='$gender',mail='$mail',phno=$phno where uname='$username'";

if(mysqli_query($con,$sql)){
echo"updated successfully";
}
else{
echo mysqli_error($con);
}

mysqli_close($con);
?>
