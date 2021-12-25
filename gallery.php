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
    <title>Document</title>
    <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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

<div class="gallary">
  <table width="auto">
<thead>

<tr>
<td>
    <img src="image\fd1.jpg" alt="no any photos" height="200px" width="100%" > 
    </td>
    <td>
        <img src="image\fd2.jpg" alt="no any photos" height="200px" width="100%" > 
        </td>
        <td>
            <img src="image\fd2.jpg" alt="no any photos" height="200px" width="100%" > 
            </td>
            <td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="33%" > 
                </td>
<td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="250px" > 
                </td>				
</tr>
</thead>
<tbody>
<tr>
    <td>
    <img src="image\fd.jpg" alt="no any photos" height="200px" width="250px" > 
    </td>
    <td>
        <img src="image\fd1.jpg" alt="no any photos" height="200px" width="250px" > 
        </td>
        <td>
            <img src="image\fd2.jpg" alt="no any photos" height="200px" width="250px" > 
            </td>
            <td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="250px" > 
                </td>
				<td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="250px" > 
                </td>
</tr>
<tr>
    <td>
    <img src="image\fd.jpg" alt="no any photos" height="200px" width="250px" > 
    </td>
    <td>
        <img src="image\fd1.jpg" alt="no any photos" height="200px" width="250px" > 
        </td>
        <td>
            <img src="image\fd2.jpg" alt="no any photos" height="200px" width="250px" > 
            </td>
            <td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="250px" > 
                </td>
				<td>
                <img src="image\fd3.jpg" alt="no any photos" height="200px" width="250px" > 
                </td>
</tr>

</tbody>
  </table>
<?php
include "footer.php"  
?> 
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>