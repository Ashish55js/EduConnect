  <?php
  $connection=mysqli_connect("localhost","root","","registration");
  $student_check_query = "SELECT * FROM `students` ";
$query = mysqli_query($connection, $student_check_query);
$student = mysqli_fetch_assoc($query);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
   

  <nav >
<div class="topnav" id="myTopnav" >
<!--<a href="javascript:void(0)" id="main" class="openbtn" onclick="opennav()"> <i class="fa fa-bars"></i></a>  -->
<!--<a href="#"> <i class="fa fa-bars"  onclick="myfun()"></i></a> -->
  <a href=""><img src="./image/sbte.png" class="rounded-circle" style="width: 50px;height:50px ;" alt="Responsive image" ></a>
  <a href="home.php" class="active">home</a>
  <a href="gallery.php">gallery</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="login.php">logout</a>
  <!--
  *<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a> 
-->
  <p style="color:white;font-size:20px;text-align:right;display:block;"> <?php echo $_SESSION['email'];?>
  <img class="rounded-circle" height="60px" width="60px"  src="./image/<?php echo  $_SESSION['file']; ?>">  </p>
  
  </div>
 </nav>
<script>
function opennav(){
  document.getElementById("mysidenav").style.width="250px";
  document.getElementById("mysidenav").style.visibility="visible";
  document.getElementById("closebtn").style.display="block";
  document.getElementById("closebtn").style.visibility="visible";
  document.getElementById("main").style.display="none";
  document.getElementById("main").style.position="fixed";
  document.getElementById("mysidenav").style.position="fixed";

}
</script>
</body>
 </html>