<?php
function add_to_basket($id, $articles, $basket)
{
	if (!empty($basket))
	{
		$exists = 0;
		foreach ($basket as $key => $product)
		{
			if ($product['article']['id'] == $id)
			{
				$basket[$key]['quantity'] += 1;
				$exists = 1;
			}
		}
		if ($exists == 0)
		{
			$tmp = array();
			$tmp['article'] = $articles[$id];
			$tmp['quantity'] = 1;
			$basket[] = $tmp;
			file_put_contents("../table/basket.csv", serialize($basket));
		}
		unset($_POST);
	}
	else
	{
		$tmp = array();
		$tmp['article'] = $articles[$id];
		$tmp['quantity'] = 1;
		$basket[] = $tmp;
		file_put_contents("../table/basket.csv", serialize($basket));
		unset($_POST);
	}
	return $basket;
}

function quantity_minus($id, $basket)
{
	if (isset($basket))
	{
		foreach ($basket as &$product)
		{
			if ($product['article']['id'] == $id)
			{
				$product['quantity'] -= 1;
				file_put_contents("../table/basket.csv", serialize($basket));
				if ($product['quantity'] == 0)
					delete_product($id);
			}
		}
	}
	unset($_POST);
	return $basket;
}

function quantity_more($id, $basket)
{
	if (isset($basket))
	{
		foreach ($basket as &$product)
		{
			if ($product['article']['id'] == $id)
			{
				$product['quantity'] += 1;
				file_put_contents("../table/basket.csv", serialize($basket));
			}
		}
	}
	unset($_POST);
	return $basket;
}

function delete_product($id, $basket)
{
	if (isset($basket))
	{
		foreach ($basket as $key => $product)
		{
			if ($product['article']['id'] == $id)
			{
				unset($basket[$key]);
				file_put_contents("../table/basket.csv", serialize($basket));
			}
		}
	}
	unset($_POST);
	return $basket;
}
?>
