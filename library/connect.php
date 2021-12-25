<?php
function connect($db){	
	$server="localhost";
	$user="root";
	$password="";
return mysqli_connect($server,$user,$password,$db);	
}
?>