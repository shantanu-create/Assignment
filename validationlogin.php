<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'enb');

	$name = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "select * from users where email = '$name' && password = '$pass'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	//echo $name;
	//echo $pass;
	//echo $num ; 	

	if($num==1){
		header('location:events.php');
	}
	else
	{
		echo '<script type="text/javascript">
			alert("Login failed.");
			window.location.href = "login.php";
		</script>';
	}
?>