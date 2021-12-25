<?php 
session_start();
if($_SESSION['email']==true){
//header('location:home.php');	
}
else{
header('location:login.php');	
	
}
?>
<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'admindb');

$sql = "SELECT * FROM  `syllabus` WHERE branch='Printing' ";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/styleform.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./js/style.js">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Download files</title>
  <style>
    thead th{
      border: 2px solid green;
      padding: 10px;
    }
    tr td{
      border: 2px solid green;
      padding: 10px;

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
<table style="text-align:center;margin:auto" border="1">
<thead>
    <th>semseter</th>
    <th>Filename</th>
    <th>size (in kb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['semester']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a class="btn btn-primary" href="admin panel/syllabus/<?php echo $file['name'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<?php
include "footer.php"  
?>
</body>
</html>