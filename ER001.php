<html>
	<head>
		<title>Chat-Error001</title>
	</head>
	<body>		
		<?php
		$yourName = $_GET['yourName'];
		
		if($yourName=='')
		{
		?>

			<h1>Chat</h1>
			<p>
			<font size="5" color="red">Error</font>
			<br>
			<font color="red">"Your Name" is required. Please input your name.</font>
			</p>
			<form action="WC101.php">
			<input type="submit" value="back">
		</form>
		<?php
		}
		else if(isset($_GET['yourName'])){
					
		header ("Location: http://127.0.0.1/WebChat/WC201.php?yourName=$yourName");
		exit;
		}
		?>


	</body>
</html>
