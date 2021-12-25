<!DOCTYPE html>
<html lang="en">
<head>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<form action="student_db.php" method="POST" style="font-size:20px;background-color:cyan ">
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
	<td> 
<input type="radio"  name="gender" value="male"style="width:600px;height:28px;border-radius:15px;border:1px solid white;font-size:20px"> male
<input type="radio" name="gender"  value="female" style="width:600px;height:28px;border-radius:15px;border:1px solid white;font-size:20px">  Female 
    </td>
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
     <option value='bihar'>bihar</option>
     <option value='up'>up</option>
     <option value='mp'>mp</option>
     <option vlaue='delhi'>delhi</option>
     <option value='mumbai'>mumbai</option>
 </select></td>
  </tr>

  <td></td>
  <td></td>
  <td> 
  <button type="submit" value="submit" name="submit" id="btn"  style="border-radius:15px;font-size:20px;pointer:cursor">submit form</button></td>
  </tr>
  
  </table>
  </form>
</body>
</html>