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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .container{
        margin:auto;
        padding:2px;
       position: relative;
       text-align:center;
    }
    .cs{
        position:relative;
        display: inline-grid;
    }
    .cs a button{
    margin:5px;
    padding:5px;
    font-size:20px;
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
?><div class="container">
<div class="cs">
 <a href="#">  <button>semester 1 syllabus</button> </a>
 <a href="#">  <button>semester 2 syllabus</button> </a>
 <a href="#">  <button>semester 3 syllabus</button> </a>
 <a href="#">  <button>semester 4 syllabus</button> </a>
 <a href="#">  <button>semester 5 syllabus</button> </a>
 <a href="sys.php">  <button>semester 6 syllabus</button> </a>
 </div>
 </div>
 <?php include "footer.php" ?>

</body>
</html>