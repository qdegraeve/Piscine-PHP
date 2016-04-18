<?php

function create_article($articles, $categories)
{
	$id = 0;
	if (isset($articles))
	{
		foreach($articles as $key => $article)
		{
			if ($article['name'] === $_POST['name'])
			{
				$_SESSION['error'] = "An article with this name already exists";
				unset($_POST);
				return FALSE;
			}
			$id = $key + 1;
		}
	}
	$articles[$id]["id"] = $id;
	$articles[$id]["name"] = $_POST["name"];
	$articles[$id]["img"] = $_POST["img"];
	$articles[$id]["description"] = $_POST["description"];
	foreach ($categories as $category)
	{
		if ($_POST[$category] == "on")
			$articles[$id]["categories"][$category] = $category;
	}
	$articles[$id]["price"] = $_POST["price"];
	file_put_contents("../table/articles.csv", serialize($articles));
	unset($_POST);
	return $articles;
}

function create_user($users)
{
	$i = 0;
	if (isset($users))
	{
		foreach($users as $key => $user)
		{
			if ($user['mail'] === $_POST['mail'])
			{
				$_SESSION['error'] = "An user with this email address already exists";
				unset($_POST);
				return FALSE;
			}
			$i = $key + 1;
		}
	}
	if ($_POST['passwd'] === $_POST['passwd_conf'])
	{
		$users[$i]["id"] 		= $i;
		$users[$i]["lastname"] 	= $_POST['lastname'];
		$users[$i]["firstname"] = $_POST['firstname'];
		$users[$i]["mail"] 		= $_POST['email'];
		$users[$i]["passwd"] 	= hash('whirlpool', $_POST['passwd']);
		file_put_contents("../table/users.csv", serialize($users));
		unset($_POST);
		return ($users);
	}
	else
	{
		$_SESSION['error'] = "Password and password confirmation are not equals";
		unset($_POST);
		return FALSE;
	}
}

function create_category($categories)
{
	$id = 0;
	if (isset($categories))
	{
		foreach($categories as $key => $category)
		{
			if ($category === $_POST['name'])
			{
				$_SESSION['error'] = "A category with this name already exists";
				unset($_POST);
				return FALSE;
			}
			$id = $key + 1;
		}
	}
	$categories[$id] = $_POST['name'];
	file_put_contents("../table/categories.csv", serialize($categories));
	unset($_POST);
	return $categories;
}
?>
