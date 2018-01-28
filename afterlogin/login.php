<?php
include ('conn.php');
if(isset($_POST['submit']))
{
$email1=$_POST['email1'];
$password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM signup WHERE email1='$email1' AND password1='$password'");
$count=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
if($count==1)
{
header("location:index.php");
}
else
{
echo "failed to login";
}
}
if(isset($_POST['signup']))
{
	header("location:signup.php");
}
?>