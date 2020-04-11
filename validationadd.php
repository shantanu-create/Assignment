<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'enb');

	$name = $_POST['name'];
	$description = $_POST['description'];
	$venue = $_POST['venue'];
	$details = $_POST['details'];
	

	$query = "select * from addevents where name = '$name'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	//echo $name;
	//echo $pass;
	//echo $num ; 	

	if($num==1){
		echo '<script type="text/javascript">
			alert("Event already exists");
			window.location.href = "mportal.php";
		</script>';
	}
	else
	{
		$reg = "insert into addevents (name,description,venue,details) values ('$name','$description','$venue','$details')";
		mysqli_query($con,$reg);
		echo '<script type="text/javascript">
			alert("Successfully added !!");
			window.location.href = "events.php";
		</script>';
	}
?>