<?php 
session_start();
if($_SESSION['email']==true){
//header('location:home.php');	
}
else{
header('location:login.php');	
	
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
 
</head>

<body>
  <div class="college-project">

 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
 <?php
include "sidebar.php"
?>
<div class="mainbody">


<?php
include "navbar.php"
?>


<div class="text">
<h1 style="display:block;text-align:center;">welcome to our college website</h1>
</div>

<div class="image">
<img src="./image/college2.jpg" class="img-fluid" style="heigh: 200px;width:100%;">
</div>
<div class="text">
<h1 style="display:block;text-align:center;">about our college</h1>
</div>

<div class="about">
<p style="font-size:25px;"> Government Polytechnic, GulzarBagh is one of the oldest Government Ploytechnic College established by the Government of Bihar under the Department of Science and Technology. It was start its first academic session in 1954 from campus of Government Polytechnic, Gulzarbagh. The Polytechnic college had Eight engineering branches – Civil, Mechanical, Electrical, Ceramics, Textile, Printing, Electronics, and Computer Science with an intake of 60 per branch except Ceramics and Textile, having 30 seat in each . 
</p>
</div>

<div class="text">
<h1 style="display:block;text-align:center;">some special features</h1>
</div>
    <div class="middle">
    <div class="card">
      <img src="./image/fd1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">diploma colleges</h5>
        <p class="card-text">click the following button to check all diploma engineering colleges in bihar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    
    <div class="card">
      <img src="./image/college2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">click the following button to check all diploma engineering colleges in bihar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>  
    
    <div class="card">
      <img src="./image/college.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">click the following button to check all diploma engineering colleges in bihar</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <?php
include "footer.php"  
?>
  </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html>