<?php
	session_start();
	?>

<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>weather forecasting
</title>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		<script src="script.js"></script>
		<script src="loginandvaidationscript.js"></script>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<style>


	.section1{
	width:100%;
	height:50%; 
	position: relative;
	top:8%;
	//background-image:url(section1-background.jpeg);
	background-size:100% 100%;
	}
	.section2{
	width:100%;
	height:50%;
	background-color:#3c3d40
	}
	div.data{
	position:relative;
	width:70%;
	height:7%;
	top:-70%;
	margin-left:15%;
	z-index:1;
	border-width:3px;
	background-color:#383434;
	border-color:#005af6;
	border-style:solid;
	border-radius:25px;
	}
	
	.mon{
	width:25%;
	height:40%;
	padding-left: 8px;
	color:white;
	border-top-left-radius:20px;
	border-bottom-left-radius:20px;
	background-color:#333131;
	position:relative;
	top:-65%;
	}
	.wed,.fri,.sun{
	width:8%;
	height:40%;
	color: white;
	text-align: center;
	background-color:#5d5f63;#333131;
	position:relative;
	display:block;
	margin:0px;

	
	}
	.tue,.thur,.sat{
	width:20%;
	height:40%;
	color: white;
	font-size: 100%;
	text-align: center;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	background-color:#5d5f63;	
	position:relative;
	display:block;
	margin:0%;
	padding:0px;
	
	}
	
}
</style>
</head>
<body>
<div class="topnav">
	<a href="about.html">About</a>
	<a href="report.php">Report</a>
	<a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">login</a>
	<a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SignUp</a>
	<a href="news.html">News</a>
	<a href="maps.html">Maps</a>

	<a href="#" class="active">Home</a>	
</div>
<div class="section1" >
  <img class="mySlides" src="img1.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="img2.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="img3.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="img4.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="img5.jpg" style="width:100%;height: 100%">

</div>
<div class="section2">
</div>

<div class="data"  >
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST"  >
	<input type="text" name="searchtext" id="input" style="font-size:90%;background-color:#383434;border-color:#383434;outline:none;height: 10%;width:88%;border-radius: 20px;position: relative;margin-top:15px;top:-15%;margin-left: 5px;color: white">
	
<input type="submit" value="Find" name="Find" style="position: relative; right: 10;border-radius:15px;padding-right:10px;padding-left:10px;background-color:#009cff;margin:5px;float:right;outline: none;" >
</form>
</div>
<!--<div class="data1">
	
</div>-->
<div class="mon" style="margin-left:25%; top:-55%">
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if(isset($_POST["Find"]))
	{$city=$_POST["searchtext"];
	$url = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=bb7509bc2f75753301f4c4bd363de381"; 
  //echo $url;
// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
  
$result = curl_exec($ch); 
  
//echo $result; 
//$object=json_encode($result);
//echo $object;
//$tmp=data.main.temp;
$data=json_decode($result);
 $tmp= $data->main->temp;
 
$tmp=$tmp-273.15;
//tmp=Math.round(tmp);
 $hum=$data->main->humidity;
 $spd=$data->wind->speed;
 echo "<p style='font-size: 50px;'>"."   ".$city."</p>";
 echo "<p style='font-size: 50px;'>".$tmp."<sup>o</sup>C</p>";
}
?>
	<!--<a href="more.html" style="color: white;text-decoration: none"><p id="date0"></p><br/>
	<p id="day0"></p><br/>
	<p id="city" style="font-size: 200%;" ></p>
	<img class="iconi0"  ><br/><br/>
	<p id="tmp0" style="font-size: 200%;"></p>
	
-->
	
</div>
<div class="tue" style="margin-left:50%; top:-95%;border-radius: ">
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if(isset($_POST["Find"]))
	{$city=$_POST["searchtext"];
	$url = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=bb7509bc2f75753301f4c4bd363de381"; 
  //echo $url;
// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
  
$result = curl_exec($ch); 
$data=json_decode($result);
$wea=$data->weather[0]->description;
$hum=$data->main->humidity;
 $spd=$data->wind->speed;
 	echo "<p style='font-size: 25px;'>Description : ".$wea."</p>";
 	echo "<p style='font-size: 25px;'>Humidity : ".$hum."</p>";
 	echo "<p style='font-size: 25px;'>Wind Speed : ".$spd."</p>";
 }
	?>
</div>
<div style="position: relative; z-index: 1;width:130px;height:70px;top:-180%;background-color: white;margin-left: 90%;border-radius: 20px;text-align: center;">
	<?php 
	if(isset($_SESSION["username"])){
	echo "Hello<br>";
	echo $_SESSION["username"];}?>
	<a href="logout.php">Logout</a>
	
</div>
<!--
<div class="thur" style="margin-left:54%;top:-185%">
	<p id="date3"></p><br/>
	<p id="day3"></p><br/>
	<img class="iconi3" ><br/><br/>
	<p id="tmp3"></p>
</div>
<div class="fri" style="margin-left:62%; top:-225%">
	<p id="date4"></p><br/>
	<p id="day4"></p><br/>
	<img class="iconi4" ><br/><br/>
	<p id="tmp4"></p>
</div>
<div class="sat" style="margin-left:70%; top:-265%">
	<p id="date5"></p><br/>
	<p id="day5"></p><br/>
	<img class="iconi5" ><br/><br/>
	<p id="tmp5"></p>
</div>
<div class="sun" style="margin-left:78%; top:-305%; border-bottom-right-radius:20px;border-top-right-radius: 20px;">
	<p id="date6"></p><br/>
	<p id="day6"></p><br/>
	<img class="iconi6" ><br/><br/>
	<p id="tmp6"></p>
</div>
-->

<!--Login-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avataar.png" alt="Avatar" class="avatar" style="height: 40%; width: 25%;">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="Login">Login</button>
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
  
  <form class="modal-content animate"  action="insertdb.php" onsubmit="validatefn()" method="POST" autocomplete="off">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avataar.png" alt="Avatar" class="avatar" style="height: 40%; width: 25%;">
    </div>

    <div class="container">
    	<label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

     <label for="phno"><b>Phone No</b></label><br/>
     <input type="number" placeholder="Enter Phone No" name="phno" style="width: 100%;padding: 12px 20px;" required><br><br>

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

</body>

</html> 
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<?php
error_reporting(E_ALL ^ E_NOTICE);  


// From URL to get webpage contents. 

//$wea=$data->weather[0]->description;
//$tmp=$tmp-273.15;
//tmp=Math.round(tmp);
 //$hum=$data->main->humidity;
 //$spd=$data->wind->speed;
//var date0=data.forecast.forecastday[0].date;
//$(".iconi0").attr("src",iconi);
//document.getElementById('hum').innerHTML="humidity : "+hum;
//document.getElementById('city').innerHTML=city;
//document.getElementById('weather').innerHTML="Description : "+wea;
//document.getElementById('tmp0').innerHTML=tmp+"<sup>o</sup>C";
 
//echo("3");
//session_start();
$conn=mysqli_connect("localhost","root","","weather");
	if(isset($_POST["Find"]))
	{	//echo("1");	
		
	$locat=$_POST["searchtext"];
	if(isset($_SESSION["username"]))
	{
	$userid=$_SESSION["username"];
	$date=date("Y-m-d");
	$searchat=date("h:i:sa");
	//echo("j");
	//echo($date);
	//echo($locat);
	$q1="insert into searchinfo (userid,locat,date,searchat)values('".$userid."','".$locat."','".$date."','".$searchat."')";
	//echo($q1);
	$q2=mysqli_query($conn,$q1);
	//header("Location:insethistory.php");
	//echo "<script type='text/javascript'>alert('Successfull');</script>";
	//header("Location:http://localhost/wtproject/");
	}
	else
	{
		//header("Location:http://localhost/wtproject/");
	}
}
else{	//echo("2");
			//header("Location: http://localhost/wtproject/#?Empty=Missing email id or password");

	}



?>