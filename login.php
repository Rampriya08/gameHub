<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pword'];
$_SESSION['username']=$username;
$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="select * from  game where uname='$username' and pword='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
header('location:start.html');
}
else{
?>
<script type="text/javascript">
	alert("incorrect data");
	location.replace("login.html");
</script>
<?php
}

mysqli_close($con);
?>



?>