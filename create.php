<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pword'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mail=$_POST['mail'];
$phno=$_POST['phno'];
$_SESSION['username']=$username;
$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="insert into game values('$username','$password','$dob','$gender','$mail',$phno,0)";
if(mysqli_query($con,$sql)){
header('location:start.html');
}
else{
?>
<script type="text/javascript">
	alert("incorrect data");
	location.replace("create.html");
</script>
<?php
}

mysqli_close($con);
?>
