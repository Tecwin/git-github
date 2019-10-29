<?php 
	$conn=mysqli_connect("localhost","root","","weather");
	session_start();

	if(isset($_POST["Login"]))
	{	
		$email=filter_var($_POST["uname"],FILTER_SANITIZE_EMAIL);
		if(empty($email)||empty($_POST["psw"]))
		{	
			header("Location: http://localhost/wtproject/#?Empty=Missing email id or password");
		}
		else
		{	
		$query="select userid,password from userinfo where userid='".$email."'and password='".$_POST["psw"]."'";
				$result=mysqli_query($conn,$query);
		if(mysqli_fetch_assoc($result))
		{	$query1="select name from userinfo where userid='".$email."'and password='".$_POST["psw"]."'";
				$result=mysqli_query($conn,$query1);
			$_SESSION["username"]=$email;
			//echo("login successfull");
			header("location:index.php");
			
		}
		else{

			header("Location: http://localhost/wtproject/#?Empty=Missing email id or password");
		}
		
		}
	}
	else{	
			header("Location: http://localhost/wtproject/#?Empty=Missing email id or password");

	}
	?>