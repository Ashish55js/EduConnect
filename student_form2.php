<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form action="student_db.php" method="POST" style="font-size:25px;background-color:cyan;width:100% " enctype="multipart/form-data">
  <table >
<h2 style="text-align:center">student details form</h2>
  <tr>
     <td>student_name</td>
	 <td>:</td>
	 <td><input type="text" placeholder="enter your name" id="name" name="student_name"  style="width:600px;height:28px;border-radius:15px;border:1px solid white;font-size:20px"></td> 
  </tr>  
  <tr>
     <td style="margin-left:0px">roll_no</td>
	 <td>:</td>
	 <td ><input type="text" placeholder="enter your roll no" id="roll_no" name="roll_no"  style="width:600px;height:28px;border-radius:15px;border:1px solid white; font-size:20px"></td>
  </tr> 
  <tr>
     <td>dob</td>
	 <td>:</td>
	 <td><input type="text" placeholder="enter your date of birth" id="dob" name="dob"  style="width:600px;height:28px;border-radius:15px;border:1px solid white;font-size:20px">
  </tr>
  <tr>
     <td>gender</td>
	 <td>:</td>
	 <td>male<input type="radio"  id="gender" name="gender">
	 female<input type="radio"  id="gender" name="gender"></td>
  </tr>
  <tr>
     <td>address</td>
	 <td>:</td>
	 <td><textarea rows="5" column="25" name="address" style="width:600px;height:50px;border-radius:15px;border:1px solid white"></textarea>
  </tr> 
  
  <tr>
     <td>state</td>
	 <td>:</td>
	 <td><select name="state"  style="font-size:20px;width:120px;height:28px;border-radius:15px;border:1px solid white">
     <option>&nbsp &nbsp bihar</option>
     <option>&nbsp &nbsp up</option>
     <option>&nbsp &nbsp mp</option>
     <option>&nbsp &nbsp delhi</option>
     <option>&nbsp &nbsp mumbai</option>
 </select></td>
  </tr>
    
    <tr><td>
  <label>uploading files</label></td>
  <td>:
</td>
<td>
<input type="file" name="file">
</td>
</tr>
  <tr>
  <td></td>
  <td></td>
  <td> 
  <button type="submit" value="submit" name="submit" id="btn"  style="border-radius:15px;font-size:20px;cursor:pointer;background-color:green;color:white">submit form</button> 
  <button type="submit" value="submit" name="update" id="btn"  style="border-radius:15px;font-size:20px;cursor:pointer;background-color:blue;color:white">update form</button>
  <a href="student_form2.php"></a>
  <button type="submit" value="submit" id="btn" name="delete" style="border-radius:15px;font-size:20px;cursor:pointer;background-color:red;color:white">delete form</button></td>
  </tr>
  
  </table>
  </form>
</body>
</html>

 <?php
// if(isset($_POST['submit'])){
	// $student_name=$_POST["student_name"];
	// $roll_no=$_POST["roll_no"];
	// $dob=$_POST["dob"];
	// $gender=$_POST["gender"];
	// $address=$_POST["address"];
	// $state=$_POST["state"];
	// $filename=$_FILES['file'];
	// $file_name=$_FILES['file']['name'];
	// $file_tmp_loc=$_FILES['file']['tmp_name'];
	// $file_store='image/'.$file_name;
	// $done=move_uploaded_file($file_tmp_loc,$file_store);
	// if($done){
		// $connection=mysqli_connect("localhost","root","","student_db");
		
		 // $query="INSERT INTO student_table (student_name, roll_no, dob,gender, address, state,photo) VALUES ('".$student_name."', '".$roll_no."','".$dob."','".$gender."', '".$address."', '".$state."','".$file_name."')";

// if(mysqli_query($connection,$query))
// {
	// echo "data inserted";

// }
// else{
	 	// echo "data not inserted";
   // }
	// }
// }

?>