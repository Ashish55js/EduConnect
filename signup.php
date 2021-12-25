
<!DOCTYPE html>
<html>
<style>
    /*add full-width input fields*/
     
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
    /* set a style for all buttons*/
     
    button {
        background-color: Green;
        color: white;
        padding: 15px 20px;
        margin: 8px 0;
        cursor: pointer;
        width: 100%;
    }
    /*set styles for the cancel button*/
     
    .cancelbtn {
        padding: 15px 20px;
        background-color: #FF2E00;
    }
    /*float cancel and signup buttons and add an equal width*/
     
    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }
    /*add padding to container elements*/
     
    .container {
        padding: 16px;
    }
    /*clear floats*/
     
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    /*styles for cancel button and signup button
      on extra small screens*/
     
    @media screen and (max-width: 300px) {
        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>
 
<body>
 
    <h2>Signup Form</h2>
    <!--Step 1:Adding HTML-->
    <form method="POST" action="#" enctype="multipart/form-data" style="border:1px solid #ccc">
        <div class="container">
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
 
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
 
            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <div class="login-mail">
					<label>uploading photo</label>
					<p><input type="file" name="file"></p>
				</div>
            <input type="checkbox" checked="checked"> Remember me
            <p>already a member <a href="login.php">Ligin here</a>.</p>
 
            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" name="sub" class="signupbtn">register here</button>
            </div>
        </div>
    </form>
 
</body>
 
</html>



<?php 

$connection=mysqli_connect("localhost","root","","registration");

if(isset($_POST['sub']))
{
$email=$_POST['email'];
$psw=$_POST['psw'];
$cpass=$_POST['psw-repeat'];
$file_name=$_FILES['file']['name'];
$file_tmp_loc=$_FILES['file']['tmp_name'];
$file_store='image/'.$file_name;
move_uploaded_file($file_tmp_loc,$file_store);


$student_check_query = "SELECT * FROM students WHERE email='$email' ";
$query= mysqli_query($connection,$student_check_query);
$res=mysqli_fetch_assoc($query);
$row=mysqli_num_rows($query);

if($row){
  echo '<script type="text/javascript"> alert("email already exits please login.")
  window.location="signup.php";
  </script>';
}

elseif($psw!=$cpass){
    echo '<script type="text/javascript"> alert("password and conform password does not match.")
    window.location="signup.php";
    </script>';
}
elseif(empty($file_name)){
  echo '<script type="text/javascript"> alert("please select your photo.")
  window.location="signup.php";
  </script>';
}
    else{

      $sql= "INSERT INTO students (`email`,`password`,`file`) VALUES ('$email','$psw','$file_name')";
      $result = mysqli_query($connection, $sql);
     if( $result){
        echo '<script type="text/javascript"> alert("signup succesfully please login now.")
        window.location="login.php";
        </script>';
     }
  else{
    echo '<script type="text/javascript"> alert("something wrong.")
    window.location="signup.php";
    </script>';
 }
    }
    }

?>