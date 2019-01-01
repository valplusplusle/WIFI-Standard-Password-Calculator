<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<?php 
		if ($_POST['ssid'] > '')
		{
			$ssid	= ($_POST['ssid']); 
			$mac	= ($_POST['mac']);
			$pre	= "SP-";
			$G		= substr($ssid, -2, 1);
			$H		= substr($ssid, -1);
			$D		= substr($mac, -4, 1);
			$E		= substr($mac, -2, 1);
			$F		= substr($mac, -1);
		}
		?>
		
	</head>
	<body>
		<div class="container"h>
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Speedport</a></li>
			    <li class="breadcrumb-item"><a href="#">Speedport</a></li>
			    <li class="breadcrumb-item"><a href="#">Speedport</a></li>
			  </ol>
			</nav>

			<div class="input">
				<form action="index.php" method="post">
					<p>SSID:	<input type="text" name="ssid" class="form-control"/>	</p>
					<p>MAC: 	<input type="text" name="mac" class="form-control"/>	</p>
					<p>			<input type="submit" class="btn btn-dark btn-lg btn-block" value="Calculate"/>				</p>
				</form>
			</div>
			
			<?php 
			if ($_POST['ssid'] > '')
			{
				for($x=0; $x < 10; $x++) 
				{
					for($y=0; $y < 10; $y++) 
					{
						for($z=0; $z < 10; $z++) 
						{
							echo $password = $pre . $G . $z . $H . $D . $E . $F . $x . $y . $z;
							echo "<br>";
						}
					}
				}
			}
			?>
			
		</div>
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	</body>
</html>