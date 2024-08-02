<?php

$username=$_POST['uname'];
$password=$_POST['pword'];

$con=mysqli_connect("localhost","root","","icebear");

if(mysqli_connect_errno($con)){
echo"failed";
}
$sql="delete from  game where uname='$username' and pword='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)==1){
?>
<script type="text/javascript">
	alert("your profile deleted successfully");
	location.replace("home.html");
</script>
<?php

}
else{
?>
<script type="text/javascript">
	alert("incorrect data");
	location.replace("delete.html");
</script>
<?php
}

mysqli_close($con);
?>


