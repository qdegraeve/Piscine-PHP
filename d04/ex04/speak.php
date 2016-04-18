<?php
session_start();
?>
<html>
<head>
	<meta content="text/html" charset="utf-8" />
</head>

<body style="margin: 5px">
<form action="speak.php" method="POST" style="margin: 0">
	<input type="text" name="msg" placeholder="<?php echo 'Raconte pas ta life '.$_SESSION['loggued_on_user'].'!'; ?>" style="width: 85%; height: 40px; margin: auto" ></input>
	<input type="submit" value="Envoyer" style="width: 10%; height: 40px; margin: auto"></input>
</form>
</body>
</html>