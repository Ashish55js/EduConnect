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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/styleform.css">
  <link rel="stylesheet" href="./js/style.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

		
<?php
include "sidebar.php"
?>
<div class="mainbody">


<?php
include "navbar.php"
?>
  </table>
  <table class="table table-dark">
  <h3> History</h3>

Government Polytechnic, GulzarBagh is one of the oldest Government Ploytechnic College established by the Government of Bihar under the Department of Science and Technology. It was start its first academic session in 1954 from campus of Government Polytechnic, Gulzarbagh. The Polytechnic college had Eight engineering branches – Civil, Mechanical, Electrical, Ceramics, Textile, Printing, Electronics, and Computer Science with an intake of 60 per branch except Ceramics and Textile, having 30 seat in each .
</p>
<h3>principal message</h3>
<p> 

We welcome you to Government Polytechnic, Gulzarbagh, Patna-7. The aim of GPP-7, Gulzarbagh is to develop human potential to its fullest extent so that intellectually capable and imaginatively gifted leaders can emerge in a range of professions by providing qualitative technical education and exploring latent talent of students.
Our students will be the emerging leaders who will help shape tomorrow’s world, employing game changing skills with a strong integrity and societal values leading to an all-round winner.
GPP-7 student will contribute to India and the World through excellence in scientific and technical education and research to serve as a valuable resource for industry and society and remain a source of pride for all Indians.

</br>
With Regards,</br>
Dr. SHREE BHAGWAN SINGH</br>
Mobile No– 9473031684</br>
Email: – principal@gpp7.org.in, gpp7-bih@nic.in</br>
</p>
<table>

<?php
include "footer.php"  
?>    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>