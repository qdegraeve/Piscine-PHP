<?php
$cmd = array();
$cmdtot = array();
?>
<div class="basket-hidden">
	<table>
		<tr>
			<th>Nom</th>
			<th>Quantité</th>
			<th>Prix</th>
		</tr>
		<?php if (isset($basket)) : ?>
		<?php foreach ($basket as $item) : ?>
		<tr>
			<td><?php echo $cmd['item'] = $item['article']['name'] ?></td>
			<td><?php echo $cmd['quantity'] = $item['quantity'] ?></td>
			<td>
				<form method="POST" action="index.php">
					<input hidden type="text" name="id" value="<?php echo $item['article']['id']; ?>" />
					<input type="submit" name="submit" value="+" />
					<input type="submit" name="submit" value="-" />
					<input type="submit" name="submit" value="x" />
				</form>
			<td>
			<td><?php echo ($tmp = ($item['article']['price'] * $item['quantity'])); ?></td>
		</tr>
		<?php	$total += $tmp;
				$cmdtot[] = $cmd;
				$totalq += $item['quantity'];
		?>
		<?php endforeach ; ?>
		<?php endif ; ?>
		<tr>
			<td>Total</td>
			<td><?php echo $totalq." | ".$total." euros"; ?></td>
		</tr>
	</table>
	<form method="POST" action="index.php">
		<input type="submit" name="submit" value="Commander" />
	</form>
</div>
