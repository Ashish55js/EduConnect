<?php 

session_start();

 $connection=mysqli_connect("localhost","root","","admindb");

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
	
    //first check that email already exist in database in or not

  $student_check_query = "SELECT * FROM `profile` WHERE student_email='$email' and password='$pass' ";

  $query = mysqli_query($connection, $student_check_query);
  $student = mysqli_fetch_assoc($query);
 $login=mysqli_num_rows($query);

 $_SESSION['email']=$email;
 $_SESSION['file']=$student['photo'];


 // print in array form or acces element of database in array form
// print_r($student['email']);

    if ($email==$student['student_email'] && $pass==$student['password']) {
        echo '<script type="text/javascript"> alert("login succesfull")
        window.location="home.php";
        </script>';
    
    }
    else{
        echo '<script type="text/javascript"> alert("email or password does not match")
        window.location="login.php";
        </script>';
    }
}

?>

<!DOCTYPE html>
<html>
<style>
    /*set border to the form*/
      
    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/
      
	  .imgcontainer img{
       height: 50px;
	   width: 50px;
	  }
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
      
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
      
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
      
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
      
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
      
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/
      
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
      
    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/
      
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
  
<body>
  
    <h2>Login Form</h2>
    <!--Step 1 : Adding HTML-->
    <form method="POST" action="#" enctype="multipart/form-data" style="border:1px solid #ccc">
        <div class="imgcontainer">
            <img src= "../images/sbte.png" alt="Avatar" class="rounded-circle">
        </div>
  
        <div class="container">
            <label><b>Useremail</b></label>
            <input type="text" placeholder="Enter your email" name="email" required>
  
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter your Password" name="pass" required>
            <button name="submit" type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me</br>
            not a member please<a href="registration.php"> register here</a>

            
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
  
</body>
  
</html>