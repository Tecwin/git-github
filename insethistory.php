<?php
echo("3");
session_start();
$conn=mysqli_connect("localhost","root","","weather");
	if(isset($_POST["Find"]))
	{	echo("1");	
		
	$locat=$_POST["searchtext"];
	if(isset($_SESSION["username"]))
	{
	$userid=$_SESSION["username"];
	$date=date("Y-m-d");
	date_default_timezone_set('Asia/Calcutta');
	$searchat=date("h:i:sa");
	echo("j");
	echo($date);
	echo($locat);
	$q1="insert into searchinfo (userid,locat,date,searchat)values('".$userid."','".$locat."','".$date."','".$searchat."')";
	echo($q1);
	$q2=mysqli_query($conn,$q1);
	
	//echo "<script type='text/javascript'>alert('Successfull');</script>";
	
	}
	else
	{
		header("Location:http://localhost/wtproject/");
	}
}
else{	echo("2");
			//header("Location: http://localhost/wtproject/#?Empty=Missing email id or password");

	}



?>