<?php
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'enb');

	$name = $_POST['name'];
	
	$query = "select * from addevents where name = '$name'";
	$result = mysqli_query($con,$query);

	$num = mysqli_num_rows($result);

	if($num==0){
		echo '<script type="text/javascript">
			alert("No such event exists");
			window.location.href = "mportal.php";
		</script>';
	}
	else
	{
		$reg = "delete from addevents where name = '$name'";
		mysqli_query($con,$reg);
		echo '<script type="text/javascript">
			alert("Successfully removed the event!!");
			window.location.href = "events.php";
		</script>';
	}
?>