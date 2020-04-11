<?php
	
	session_start();

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'enb');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EnB Club, IIT BOMBAY</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="demo-btns">
		<header>
			<font size="10">Events</font>
		</header>

		<div class="info">
			<div class="buttons">
				<p>
					<?php

						$query = "select * from addevents";
						$result = mysqli_query($con,$query);
						$num = mysqli_num_rows($result);

						//echo $num;
		
					while($rows = mysqli_fetch_assoc($result))
					{
						echo '<a href="" data-modal="#modal" class="modal__trigger"><b>'.$rows['name'].'</b></a>';
					}
				?>

					
				</p>
			</div>
			<p>Click a button to view the details of the events.</p>
		</div>
</div>

	<!-- Modal -->
	<?php

		$query = "select * from addevents";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);

		//echo $num;
		
		while($rows = mysqli_fetch_assoc($result))
		{
			echo '<div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
					<div class="modal__dialog">
						<div class="modal__content">
							<h1>'.$rows['name'].'</h1> 
									<p>'.$rows['description'].'</p><!-- modal close button -->
				<a href="" class="modal__close demo-close">
					<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
				</a><br>Venue : '.$rows['venue'].'<br>Date and Time : '.$rows['details'].'

			</div>
		</div>
	</div>';
		}
	?>
<!-- partial -->
  <script  src="./script1.js"></script>

</body>
</html>
