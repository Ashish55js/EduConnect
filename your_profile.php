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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>student profile</title>
    <style>

    .container{
        display:flex;
        text-allign:center;
    }
    .container td{
        font-size:20px;
        text-allign:center;
        padding:10px;
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

<?php
include('./library/connect.php');
$con=connect('admindb');
$sql="SELECT * from `profile` WHERE student_email='$_SESSION[email]' ";
$status=mysqli_query($con,$sql);
$rs=mysqli_fetch_assoc($status);

//check to print in array form or not
//print_r($rs);

?>


<div class="container">
<table style="background-color:white;" border=1>

<tr>
   <td style="height:50px,width:50px" >
<img class="rounded-circle" height="150px" width="150px" border-radius="30px" src="./image/<?php echo $rs['photo'];?> ">
   </td>
 </tr>

 <tr>
   <td> 
    your name
   </td>
   <td>
<?php echo $rs['student_name'];
?>
   </td>

   <td> 
    your email
   </td>
   <td>
<?php echo $rs['student_email'];
?>
   </td>
 </tr>
 
 <tr>
   <td>
your branch   </td>
   <td>
<?php echo $rs['student_branch'];
?>
   </td>
   <td>
your board roll no   </td>
   <td>
<?php echo $rs['board_roll_no'];
?>
   </td>
 </tr>
 <tr>
   <td>
your class roll no   </td>
   <td>
<?php echo $rs['class_roll_no'];
?>
   </td>

   <td>
your mobile no   </td>
   <td>
<?php echo $rs['mobile_no'];
?>
   </td>
 </tr>
 <tr>
   <td>
your address   </td>
   <td>
<?php echo $rs['address'];
?>
   </td>

   <td>
your gender   </td>
   <td>
<?php echo $rs['gender'];
?>
   </td>
 </tr>

   <td>
your dob   </td>
   <td>
<?php echo $rs['dob'];
?>
   </td>
 </tr>

</table>
 
</div>
<?php
include "footer.php"  
?>
</body>
</html>