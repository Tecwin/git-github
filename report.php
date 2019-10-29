<!DOCTYPE html>
<html>
<head>
	<title>About
	</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<style type="text/css">
		body{
      margin:0px;
      padding: 0px;
			background-color: black;
      //background-image: url("img7.jpg");
		}
		.section{
			
			color: white;
			position: relative;
			bottom:-50%;
		}
    .section1{
      position:relative;
      top:8%;
      width: 100%;
      height: 100%;
    }
    .table{
      position: relative;
      background-color:rgba(179, 217, 255,0.3);
      top:-20%;
      width:30%;
      z-index: 3;
      border-spacing: 10px;
      margin-left: 35%;
      margin-top: -20%;
    }
    .table,td,th{
      border:2px solid black;
      padding:0px;

    }
	</style>
</head>
<body>
<div class="topnav">
	<a href="about.html">About</a>
  <a href="report.php" class="active">Report</a>
	<a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">login</a>
	<a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SignUp</a>
	<a href="news.html">News</a>
  <a href="maps.html" >Maps</a>

	<a href="index.php ">Home</a>	
</div>
<div class="section1">
  <img src="img7.jpg" style="height: 100%;width: 100%;">
</div>
 <?php

 ?>


<div class="table">
    <table style="width:100%;text-align: center;">
    <tr>
    <th>Name</th>
    <th>Location Searched</th>
    <th>Date</th>
    <th>Time</th>
    </tr>
  
</div>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","weather");
if(isset($_SESSION["username"]))
{
$query="select * from searchinfo where userid='{$_SESSION['username']}'";
//echo $query;
$result=mysqli_query($conn,$query);
//echo $result ;
  while($rows=mysqli_fetch_assoc($result))
  {
    $txt="<tr>
    
    <td> ".$rows["userid"]."</td>
    <td> ".$rows['locat']."</td>
    <td>".$rows['date']."</td>
    <td><". $rows['searchat']."</td>
    </tr>";
    echo $txt;


  }
}
else{
  echo "login please";
}
?>
</table>

</div>

<!--Login-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avataar.png" alt="Avatar" class="avatar" style="height: 40%; width: 25%;">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--Sign up-->
<div id="id02" class="modal">
  
  <form class="modal-content animate"  action="" onsubmit="validatefn()">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avataar.png" alt="Avatar" class="avatar" style="height: 40%; width: 25%;">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input  id="psw1" type="password" placeholder="Enter Password" name="psw" required>

       <label for="psw"><b>Password</b></label>
      <input id="psw2" type="password" placeholder="Re-Enter Password" name="psw" required>
        
      <button type="submit">SignUp</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

</div>
</body>
</html>