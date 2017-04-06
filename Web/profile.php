<?php
session_start();
if(!isset($_SESSION['uid'])||$_SESSION['uid']== '')
{
?>
<script>
window.location = "user.php";
</script>
<?php
}else{
echo "<span style='color:green;'>Welcome: </span>" .$_SESSION['uid']; 
}
?>

<!DOCTYPE HTML>
<html>

<body>
<body>
    <style>
	body{
		
		font-family:"Arial";
	}
	</style>
<h2 style="text-align: center; margin-bottom: 20px;margin-top:20px">
<font color="orange">
<b>
THANKS FOR REGISTRATION.PLEASE CLOSE THIS WINDOW FOR SECURITY PUPOSE.
</b>
</font>
</h2>
<center> 
<form action="logout.php">
<button>LogOut</button>
<center>
</form>
</body>
</body>
</html>
