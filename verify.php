<?php
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT password FROM `users` WHERE `email`= '$email'";
session_start();
$results=mysqli_query($con,$query); //query is statement and con is connection to database.
$row=mysqli_fetch_row($results);
$db_password=$row[0];
if(password_verify($password,$db_password)){
	$_SESSION[$email]=$email;
	header("location: index.php?email=$email");

}
else{
	$message="password or email address incorrect";
	header("location:login.php?message=$message");
}
?>