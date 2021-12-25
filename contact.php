
<?php 
session_start();
if($_SESSION['email']==true){
//header('location:home.php');	
}
else{
header('location:login.php');	

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/styleform.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<style>
		body{
		background-color:cyan;
		}
    .footer{
      height:fit-content;
    }
		</style>
		</head>
    
    <body>
    <?php
include "sidebar.php"
?>
<div class="mainbody">


<?php
include "navbar.php"
?>
 <form  action="#" method="POST" >
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="fname" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="lname" placeholder="Last name">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="mobile">mobile number</label>
      <input type="number" name="mno" class="form-control" id="mobileno">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address 1</label>
    <input type="text" name="add1" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" name="add2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name="state" id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option value="assam">assam</option>
        <option value="bihar">bihar</option>
        <option value="jharkhand">jharkhand</option>
        <option value="tamilnadu">tamilnadu</option>
        <option value="goa">goa</option>
        <option value="delhi">delhi</option>
        <option value="mumbai">mumbai</option>
        <option value="kolkata">kolkata</option>
        <option value="panjab">panjab</option>
        <option value="haryana">haryana</option>
        <option value="chhatisgadh">chhatisgadh</option>
        <option value="lakhnau">lakhnau</option>
        <option value="karnatak">karnatak</option>
        <option value="keral">keral</option>
        <option value="chainai">chainai</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="zip" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  
</form>

<?php
include "footer.php"  
?>    
</body>

</html>

<?php

if(isset($_POST["submit"])){
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mno'];
	$address1=$_POST['add1'];
	$address2=$_POST['add2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	//$filename=$_FILES['file'];
    

if($fname & $lname & $email &  $mobile_no & $address1 & $address2 & $city & $state & $zip)
{
	$connection=mysqli_connect("localhost","root","","admindb");

 $query="INSERT INTO `contact` (`fname`, `lname`,`email`,`mobile_no`,`address1`,`address2`, `city`,`state`,`zip`) VALUES ('".$fname."','".$lname."','".$email."','".$mobile_no."','".$address1."','".$address2."','".$city."','".$state."','".$zip."')";

 if($result=mysqli_query($connection,$query)){
	echo '<script type="text/javascript"> alert("contact details succesfully submitted")
    window.location="home.php";
    </script>';
	}

else {
	echo '<script type="text/javascript"> alert("something wrong")
 window.location="contact.php";
    </script>';	
}
}
else{
	echo '<script type="text/javascript"> alert("some field is empty so field that properly.")
 window.location="contact.php";
    </script>';
}
}

?>