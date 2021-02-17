<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Press+Start+2P');


		$color: #54FE55;
		$color2: #1a4f1a;
		$glowSize: 10px;

		html,body{
			width: 100%;
			height: 100%;
			margin: 0;
		}

		*{
			font-family: 'Press Start 2P', cursive;
			box-sizing: border-box;
		}
		#app{
			background: black;
			max-height: 100%;
			width: 100%;
			display: flex;
			justify-content: center; 
			align-items: center;
			color: #54FE55;
			text-shadow: 0px 0px 10px ;
			font-size: 20px;
			flex-direction: column;
			padding: 5rem;
			.txt {
				font-size: 1.8rem;
			}
		}
		@keyframes blink {
			0%   {opacity: 0}
			49%  {opacity: 0}
			50%  {opacity: 1}
			100% {opacity: 1}
		}

		.blink {
			animation-name: blink;
			animation-duration: 1s;
			animation-iteration-count: infinite;
		}
	</style>
</head>
<body style="background-color: black;">
	<div id="app">
		<div>403:</div>
		<div class="txt">
			Forbidden<span class="blink">_</span>
		</div>
		<div class="txt" style="margin-top: 100px; text-align: left; font-size: 10px;">
			<?php
			function IPnya() {
				$ipaddress = '';
				if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
				else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
				else if(getenv('HTTP_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_FORWARDED_FOR');
				else if(getenv('HTTP_FORWARDED'))
					$ipaddress = getenv('HTTP_FORWARDED');
				else if(getenv('REMOTE_ADDR'))
					$ipaddress = getenv('REMOTE_ADDR');
				else
					$ipaddress = 'IP Tidak Dikenali';
			return $ipaddress;
			}
			
			$ipaddress = $_SERVER['REMOTE_ADDR'];
				echo "Your IP Address&nbsp&nbsp: ";
				echo IPnya();
				echo "<br><br>Browser&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: ";
				echo $_SERVER['HTTP_USER_AGENT'];
				echo "<br><br>Operation System : ";
				echo php_uname();
			?>
			<div style="text-align: center; margin-top: 100px; font-size: 30px; color: red;">
				<span class="blink">I'am Watching you..</span>
			</div>
		</div>


	<div class="txt" style="margin-top: 15%; text-align: center;">
		@security<span class="blink">*</span>Cys-t3am </br>
		<span style="font-size: 10px;">CV. Cipta Sinergi Manufacturing</span>
	</div>


</div>
</body>
</html>
