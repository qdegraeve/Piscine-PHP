<?php
session_start();
if ($_GET['submit'] == "OK")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>

<html>
<head>
	<title></title>
</head>
<body>
<form method="GET" action="index.php">
	<p>
		Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
		<br />
		Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>"/>
		<input type="submit" name="submit" value="OK" />
	</p>
</form>

</body>
</html>
