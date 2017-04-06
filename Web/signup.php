<?php
include ('db.php');
session_start();


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (first, last, uid, pwd) 
VALUES ('$first','$last','$uid','$pwd')";
$res =$con->query($sql);
header("Location: index.php");
?>