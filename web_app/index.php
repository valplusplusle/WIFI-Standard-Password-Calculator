<html>
	<head>
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
	<bod>
		<div class="main">
			<div class="input">
				<form action="index.php" method="post">
					<p>SSID:	<input type="text" name="ssid" />	</p>
					<p>MAC: 	<input type="text" name="mac" />	</p>
					<p>			<input type="submit" />				</p>
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
	</bod>
</html>