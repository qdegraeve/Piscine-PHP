<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>Home</title>
</head>
<body>
<?php
if (!$_SESSION['loggued_on_user'] || $_SESSION['loggued_on_user'] === "")
{
	echo '<form method="POST" action="login.php">
	<p>
		<h1>Se connecter</h1><br />
		Identifiant: <input type="text" name="login" required />
		<br />
		Mot de passe: <input type="password" name="passwd" required />
		<br />
		<input type="submit" name="submit" value="OK" />
	</p>
</form>';
}
else
	echo '<h1>Bonjour $_SESSION["loggued_on_user"]</h1>\n';

?>
<a href="/ex04/modif.html">Modifier mon mot de passe</a><br />
<a href="/ex04/create.html">Créer mon compte</a><br />
<form method="POST" action="logout.php">
	<input type="submit" name="Se Déconnecter" value="Se Déconnecter"></input>
</form>
</body>
</html>
