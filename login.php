<?php
include ('conn.php');
if(isset($_POST['submit']))
{
$email1=$_POST['email1'];
$password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM signup WHERE email1='$email1' AND password1='$password'");
$result=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
if($result>0)
{
	session_start();
	$_SESSION['fname']=$row['fname'];
	header('location:afterlogin/index.php');
}
else
{
	echo"Please Enter Valid User ID & Password";
}
}
if(isset($_POST['signup']))
{
	header("location:signup.php");
}
?>