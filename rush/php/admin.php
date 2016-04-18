<?php if ($_POST['submit'] == 'Section administrateur' || $_POST['submit'] == 'Modifier l\'utilisateur' ||$_POST['submit'] == 'Modifier le produit') : ?>
<div class ="product">
<form method="POST" action="index.php">
		<h1>Modifier un utilisateur</h1><br />
       <label for="user">choisir un user</label><br />
       <select name="user" id="user">
		<?php foreach($users as $user) : ?>
		<option value="<?php echo $user['id']; ?>"><?php echo $user['mail']; ?></option>
		<?php endforeach ; ?>
       </select><br />
		<input type="submit" name="submit" value="Modifier cet utilisateur" />
</form>
</div>
<div class ="product">
<form method="POST" action="index.php">
		<input class="lien_input" type="submit" name="submit" value="Ajouter une categorie"></input><br />
		<h1>Modifier une categorie</h1><br />
       <label for="category">Choisir une categorie</label><br />
       <select name="category" id="category">
		<?php foreach($categories as $category) : ?>
		<option value="<?php echo $category; ?>"><?php echo $category; ?></option>
		<?php endforeach ; ?>
       </select><br />
		<input type="submit" name="submit" value="Modifier cette categorie" />
</form>
</div>
<div class ="product">
<form method="POST" action="index.php">
		<input class="lien_input" type="submit" name="submit" value="Ajouter un produit"></input><br />
		<h1>Modifier un produit</h1><br />
       <label for="article">Choisir un produit</label><br />
       <select name="article" id="article">
		<?php foreach($articles as $article) : ?>
		<option value="<?php echo $article['id']; ?>"><?php echo $article['name']; ?></option>
		<?php endforeach ; ?>
       </select><br />
		<input type="submit" name="submit" value="Modifier ce produit" />
</form>
</div>

<?php elseif ($_POST['submit'] == 'Modifier cet utilisateur') : ?>


<form method="POST" action="index.php">
		<input hidden name="id" value="<?php echo $users[$_POST['user']]['id']; ?>" />
		Nom: <input type="text" name="lastname" value="<?php echo $users[$_POST['user']]['lastname']; ?>" required />
		<br />
		Prenom: <input type="text" name="firstname" value="<?php echo $users[$_POST['user']]['firstname']; ?>" required />
		<br />
		email: <input type="email" name="mail" value="<?php echo $users[$_POST['user']]['mail']; ?>" required />
		<br />
		<input type="submit" name="submit" value="Modifier l'utilisateur" />
</form>

<?php elseif ($_POST['submit'] == 'Ajouter une categorie') : ?>


<form method="POST" action="index.php">
		Nom: <input type="text" name="name" required />
		<br />
		<input type="submit" name="submit" value="Ajouter cette categorie" />
</form>

<?php elseif ($_POST['submit'] == 'Ajouter un produit') : ?>

<?php include('create.php'); ?>


<?php elseif ($_POST['submit'] == 'Modifier cette categorie') : ?>


<form method="POST" action="index.php">
		<input hidden name="id" value="<?php echo $_POST['category']; ?>" />
		Nom: <input type="text" name="name" value="<?php echo $_POST['category']; ?>" required />
		<br />
		<input type="submit" name="submit" value="Modifier la categorie" />
</form>


<?php elseif ($_POST['submit'] == 'Modifier ce produit') : ?>


<form method="POST" action="index.php">
		<input hidden name="id" value="<?php echo $articles[$_POST['article']]['id']; ?>" />
		Nom: <input type="text" name="name" value="<?php echo $articles[$_POST['article']]['name']; ?>" required />
		<br />
		<label for="description">"Description:</label></ br>
		<textarea name="description" id="description" col="50" required ><?php echo $articles[$_POST['article']]['description']; ?></textarea>
		<br />
		Categorie(s): <br />
<?php foreach ($categories as $category)
{
echo '<input type="checkbox" name="' . $category . '" id="' . $category . '" /> <label for="' . $category . '">'.$category.'</label><br />';
}
?>
		<br />
		copier l'url de la photo: <input type="text" name="img" value="<?php echo $articles[$_POST['article']]['img']; ?>" required />
		<br />
		Prix: <input type="number" min="0" max="1000000" name="price" value="<?php echo $articles[$_POST['article']]['price']; ?>" required />
		<br />
		<input type="submit" name="submit" value="Modifier le produit" />
</form>

<?endif ; ?>
