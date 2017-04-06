<?php
session_start();

if(isset($_POST['login']))
{
require 'db.php';
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$result = mysqli_query($con, "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'");
if(mysqli_num_rows($result)==1)
{
$_SESSION['uid'] = $uid;
header('Location:profile.php');
}
else
{
 echo "<span style='color:red;'>Invalid Account Details.Please check credentials correctly... </span>";
}
}

?>
<!DOCTYPE HTML>
<html>
<head>

     <title>Registration CUM Login Page</title>
	 </head>
<body>
<body>
    <style>
	body{
		
		font-family:"Arial";
	}
	</style>

<center><h3><font color="blue">LOGIN HERE:-</font></h3></center>
<center><h4 style="margin-bottom:40px"><font color="red">(***Registered users only)</font></h4></center>
<center>
<form method="POST" action="index.php?action=login">
<input type="text" name="uid" placeholder="Username" required><br>
<input type="password" name="pwd" placeholder="Password" required><br>
<tr>
<td><input type="submit" name="login" value="Login"></td>
</tr>
</form>
</center>

<center><h3><font color="blue"><B>REGISTER HERE:-</B></font></h3></center>
<center><h4 style="margin-bottom:40px"><font color="RED">(***For new users only)</font></h4></center>
<center>
<form action = "signup.php" method="POST">
<input type="text" name="first" placeholder="Firstname" required><br>
<input type="text" name="last" placeholder="Lastname" required><br>
<input type="text" name="uid" placeholder="Username" required><br>
<input type="password" name="pwd" placeholder="Password" required><br>
<button type="submit">Sign Up</button>
</form>
</center>

