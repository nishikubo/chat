
<html>
	<head>
		<title>Chat</title>
	</head>
	<body>

		<?php
  		if(isset($_POST['loginid'])){
  		$loginid=$_POST['loginid'];
  		}
  		else {
  		$loginid="";
  		}
  		if(isset($_POST['password'])){
  		$password=$_POST['password'];
  		}
  		else {
  		$password="";
  		}
		?>
		
		<div>
		<form action="WC201.php" name="form1" method="post">
		<?php print $_REQUEST['loginid']; ?>
  		<input name="comment" type="text">
  		<input name="loginid" type="hidden" value= $loginid >
  		<input type="submit" name="fSub1" value="Write">
  		<br>
			<hr>
			<script>
			function koshin(){
			  location.reload();
			}
			</script>
			<input type="submit" value="Refresh" onclick="koshin()">
  			<div> <?php print $_REQUEST['loginid']; ?></div>
  		  		
  		</form> 
  		<hr>
  		<form action="WC301.php" name="form1" method="post">  		
  			<input type="submit" name="fSub2" value="History">	  		
   		</form>

		<form action="WC101.php" name="form1" method="post">  		
  			<input type="submit" name="fSub2" value="Logout">	  		
   		</form>
   		

  		</div>
	</body>
</html>
