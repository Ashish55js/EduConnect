<?php
session_start();
//session start

$error='';//variable to store error message
if(isset ($_POST ['submit']));
{
if(empty ($_POST ['useremail'])||($_POST ['password']));
{
$error='usereamil or password is invalid';//
}
}
else
{
	//define $useremail and$password
	
$email=$_GET["useremail"];
$password=$_GET["password"];

$connection=mysqli_connect("localhost","root","","formdatabase");
$sql="INSERT INTO `formtable` (email,password) VALUES('".$email."' ,'".$password."')";

}
mysqli_close($connection);	
}



?>