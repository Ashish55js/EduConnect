<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./js/style.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    <style>
      /* sidebar */
  
  /* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: -10px;
  background-color: #111;
  overflow-x: hidden;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: white;
  background-color:aqua;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.openbtn{
  font-size:30px;
  position:absolute;
  margin-left:2px;
  color:white;
  border-radius:10px;
  background: #dc3545;
  transition: 0.5s all ease;
}
.sidenav .closebtn{
  font-size:25px;
  margin-left:200px;
  color:white;
  border-radius:10px;
  margin-top:0px;
  padding-top:0px;
  transition: 0.5s all ease;
  background: #dc3545;
}
  </style>
</head>
<body>
  <div class="sidenav" id="mysidenav">
  <a href="javascript:void(0)" id="closebtn" class="closebtn" onclick="closenav()"><i class="fa fa-close"></i></a>
  <a href="download.php">download pdf</a>
  <a href="edit_profile.php">edit your profile</a>
  <a href="your_profile.php">your profile</a>
    <button class="dropdown-btn">Previous year questions
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="cs.php">computer science and engg</a>
    <a href="#">mechanical</a>
    <a href="#">eclectrical</a>
  </div>
  <button class="dropdown-btn">Syllabus
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="cssys.php">computer science and engg</a>
    <a href="mechsys.php">mechanical</a>
    <a href="elecsys.php">electrical</a>
    <a href="civilsys.php">civil</a>
    <a href="ceramicsys.php">ceramics</a>
    <a href="printingsys.php">printing</a>
  </div>
</div> 

<div id="main">
  <button class="openbtn" onclick="opennav()">&#9776; </button>
</div>

<script>
  
  //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
function closenav(){
  document.getElementById("mysidenav").style.width="0px";
  document.getElementById("closebtn").style.display="none";
  document.getElementById("main").style.display="block";

}
function opennav(){
  document.getElementById("mysidenav").style.width="280px";
  document.getElementById("closebtn").style.display="block";
  document.getElementById("closebtn").style.visibility="visible";
  document.getElementById("main").style.position="fixed";
  document.getElementById("mysidenav").style.position="fixed";

}
</script>
</body>
</html>