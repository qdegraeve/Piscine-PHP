<div class="connection">
<?php if (!isset($_SESSION['user']) || $_SESSION['user'] === "") : ?>

	<form method="POST" action="index.php">
	<p>
		<h1>Se connecter</h1><br />
		Identifiant: <input type="text" name="login" required />
		<br />
		Mot de passe: <input type="password" name="passwd" required />
		<br />
		<input type="submit" name="submit" value="LOGIN" />
	</p>
	</form>
<form method="POST" action="index.php">
<input class="lien_input" type="submit" name="submit" value="Pas encore inscrit ?"></input><br />
</form>

<?php else : ?>

<h1>Bonjour <?php echo $_SESSION["user"]["firstname"]." ".$_SESSION["user"]["lastname"]; ?></h1>
<form method="POST" action="logout.php">
	<input type="submit" name="Se Déconnecter" value="LOGOUT"></input>
</form>
<form method="POST" action="index.php">
<input class="lien_input" type="submit" name="submit" value="modifier mon compte"></input><br />
</form>
<?php endif ?>
<?php if (isset($_SESSION) && $_SESSION['user']['mail'] == "root@root.fr") : ?>
<form method="POST" action="index.php">
<input class="lien_input" type="submit" name="submit" value="Section administrateur"></input><br />
</form>
<? endif ; ?>
</div>
