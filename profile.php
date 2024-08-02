<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['pword'];
$_SESSION['uname']=$username;
$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="select * from  game where uname='$username' and pword='$password'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result)){
?>
<center>

		<h3>YOUR PROFILE</h3><br><br><br><br>
		<form action="update.php" method="post">
		USERNAME:<input type="text" name="uname" value="<?php echo$row['uname'];?>" ><br><br>
		PASSWORD:<input type="text" name="pword" value="<?php echo$row['pword']; ?>" ><br><br>
		DATE OF BIRTH:<input type="text" name="dob" value="<?php echo$row['dob']; ?>" ><br><br>
		GENDER:<input type="text" name="gender" value="<?php echo$row['gender']; ?>" > <br><br>
		EMAIL:<input type="text" name="mail" value="<?php echo$row['mail']; ?>" ><br><br>
		PHONE NUMBER:<input type="text" name="phno" value="<?php echo$row['phno']; ?>"><br>
<br>
	
<input type="submit" name="" value="update"></form>

</form>
</center>
<?php
}
else{
echo mysql_error($con);
}

mysqli_close($con);
?>



