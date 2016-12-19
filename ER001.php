<?php
header ("Location: http://127.0.0.1/Chat/WC201.php?loginid==$loginid");
?>


<html>
	<head>
		<title>Chat-Error001</title>
	</head>
	<body>
		<?php
		$loginid = $_GET['loginid'];
		$password = $_GET['password'];
		if($loginid==='' && $password==='')
		{
		?>

			<h1>Chat</h1>
			<p>
			<font size="5" color="red">Error</font>
			<br>
			<font color="red">Please input your name.</font>
			</p>
			<form action="WC101.php">
			<input type="submit" value="back">
		</form>
		<?php
		}
		else if ($loginid==='' ) {
			?>
			<h1>Chat</h1>
			<p>
			<font size="5" color="red">Error</font>
			<br>
			<font color="red">Not found id.</font>
			</p>
			<form action="WC101.php">
			<input type="submit" value="back">
		</form>
		<?php
		}

		else if ($password==='') {
			?>
			<h1>Chat</h1>
			<p>
			<font size="5" color="red">Error</font>
			<br>
			<font color="red">Password is incorrect.</font>
			</p>
			<form action="WC101.php">
			<input type="submit" value="back">
		</form>
		<?php
		}
/*		else if(isset($_GET['loginid'])){

			header ("Location: http://127.0.0.1/WebChat/WC201.php?yourName=$loginid");
			exit;
	}*/
		?>


	</body>
</html>
