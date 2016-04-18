<form method="POST" action="index.php">
	<p>
		<h1>Ajouter un produit</h1><br />
		Nom: <input type="text" name="name" required />
		<br />
		<label for="description">"Description:</label></ br>
		<textarea name="description" id="description" col="100%" required >
256 Caracteres Maximum</textarea>
		<br />
		Categorie(s): <br />
<?php foreach ($categories as $categorie)
{
echo '<input type="checkbox" name="' . $categorie . '" id="' . $categorie . '" /> <label for="' . $categorie . '">'.$categorie.'</label><br />';
}
?>
		<br />
		copier l'url de la photo: <input type="text" name="img" required />
		<br />
		Prix: <input type="number" min="0" max="1000000" name="price" required />
		<br />
		<input type="submit" name="submit" value="creer mon produit" />
	</p>
</form>
