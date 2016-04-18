<?php foreach ($articles as $article) : ?>
<?php foreach ($article['categories'] as $category)
{
   if ($category == $_GET['name']) : ?>
	<div class="product">
		<div class="nom">
			<h1><?php echo $article['name']; ?></h1>
		</div>
		<div class="apercu">
			<img src="<?php echo $article['img']; ?>">
			<p><?php echo $article['description']; ?></p>
		</div>
		<div class="tags">
			<?php
			if (isset($article['categories']))
			{
				foreach ($article['categories'] as $cat)
					echo "<p>".$cat."</p>";
			}
			?>
		</div>
		<div class="prix">
			<form method="POST" action="index.php">
				<?php echo $article['price']." euros"; ?>
				<input hidden type="text" name="id" value="<?php echo $article['id']; ?>" />
				<input type="submit" name="submit" value="Ajouter au panier" />
			</form>
		</div>
	</div>
<?php endif; 
}?>
<?php endforeach; ?>
