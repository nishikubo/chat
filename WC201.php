<html>
	<head>
		<title>Chat</title>
	</head>
	<body>

		<?php
  		if(isset($_POST['yourName'])){
  		$yourName=$_POST['yourName'];
  		}
  		else { 
  		$yourName="";
  		}
  		if(isset($_POST['comment'])){
  		$comment=$_POST['comment'];
  		}
  		else {
  		$comment="";
  		}
		?>
		<div>
		<form action="WC201.php" name="form1" method="post">
		<?php print $_REQUEST['yourName']; ?>
  		<input name="comment" type="text">
  		<input name="yourName" type="hidden" value=<?= $yourName ?>> 
  		<input type="submit" name="fSub1" value="Write">  				
			<hr>
			<script>
			function koshin(){
			  location.reload();
			}
			</script>
			<input type="submit" value="Refresh" onclick="koshin()">
  			<div> <?php print $_REQUEST['yourName']; ?></div>
  		<hr>
  		  		<input type="submit" name="fSub2" value="Logout">
  		</form>
  		</div>
	</body>
</html>
