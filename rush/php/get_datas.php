<?php

function get_articles()
{
	$articles = array();
	$datas = file_get_contents("../table/articles.csv");
	if (!empty($datas))
	{
		$articles = unserialize($datas);
	}
	return $articles;
}


function get_users()
{
	$users = array();
	$datas = file_get_contents("../table/users.csv");
	if (!empty($datas))
	{
		$users = unserialize($datas);
	}
	return $users;
}

function get_categorie()
{
	$categories = array();
	$datas = file_get_contents("../table/categories.csv");
	if (!empty($datas))
	{
		$categories = unserialize($datas);
	}
	return $categories;
}

function get_basket()
{
	$basket = array();
	$datas = file_get_contents("../table/basket.csv");
	if (!empty($datas))
	{
		$basket = unserialize($datas);
	}
	return $basket;
}

?>
