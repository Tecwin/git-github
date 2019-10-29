<?php
	$conn=mysqli_connect("localhost","root","","weather");
	$name=$_POST["name"];
	$phno=$_POST["phno"];
	$uname=$_POST["uname"];
	$psw=$_POST["psw"];
	$q="select * from userinfo where userid='$uname'";
	$result=mysqli_query($conn,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		echo "<script type='text/javascript'>alert('Username already taken');</script>";
	}
	else{
	$q1="insert into userinfo (name,userid,password,phno)values('".$name."','".$uname."','".$psw."',".$phno.")";
	mysqli_query($conn,$q1);
	echo "<script type='text/javascript'>alert('Successfull');</script>";
	header("Location:http://localhost/wtproject/");
}
?>