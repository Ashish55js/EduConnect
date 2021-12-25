<?php
if(isset($_POST['submit'])){
	$student_name=$_POST["student_name"];
	$roll_no=$_POST["roll_no"];
	$dob=$_POST["dob"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$state=$_POST["state"];
	
		$connection=mysqli_connect("localhost","root","","student_db");
		
		 $query="INSERT INTO student_table (student_name, roll_no, dob,gender, address, state) VALUES ('".$student_name."', '".$roll_no."','".$dob."','".$gender."', '".$address."', '".$state."')";

if(mysqli_query($connection,$query))
{
	echo "data inserted";

}
else{
	 	echo "data not inserted";
   }
	}


?>