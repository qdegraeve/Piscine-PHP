<?php foreach ($categories as $category) : ?>
	<div class="product">
		<div class="nom">
			<h1><?php echo $category; ?></h1>
		</div>
		<img></img>
			<form method="GET" action="index.php">
				<input hidden type="text" name="name" value="<?php echo $category; ?>" />
				<input type="submit" name="submit" value="Visiter cette categorie" />
			</form>
	</div>
<?php endforeach; ?>
