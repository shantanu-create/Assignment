<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'enb');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "select * from users where email = '$email'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	//echo $name;
	//echo $pass;
	//echo $num ; 	

	if($num==1){
		echo '<script type="text/javascript">
			alert("Email ID already exists......Redirecting to register page again");
			window.location.href = "login.php";
		</script>';
	}
	else
	{
		$reg = "insert into users (fname,lname,email,password) values ('$fname','$lname','$email','$pass')";
		mysqli_query($con,$reg);
		echo '<script type="text/javascript">
			alert("Successfully Registered !!");
			window.location.href = "events.html";
		</script>';
	}
?>