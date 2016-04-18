<?php
function modif_user($users)
{
	foreach($users as &$user)
	{
		if ($user["id"] == $_POST["id"])
		{
			$user["firstname"] = $_POST["firstname"];
			$user["lastname"] = $_POST["lastname"];
			$user["mail"] = $_POST["mail"];
			file_put_contents("../table/users.csv", serialize($users));
			unset($_POST);
			return $users;
		}
	}
	unset($_POST);
	return FALSE;
}

function modif_passwd($users)
{
	foreach ($users as &$user)
	{
		if ($user['mail'] === $_POST['email'] and $user['passwd'] === hash('whirlpool', $_POST['oldpw']))
		{
			$user['passwd'] = hash('whirlpool', $_POST['newpw']);
			file_put_contents("../table/users.csv", serialize($users));
			unset($_POST);
			return $users;
		}
	}
	unset($_POST);
	return FALSE;
}

function modif_articles($articles, $categories)
{
	foreach($articles as $key => $article)
	{
		if ($article['id'] == $_POST['id'])
		{
			$articles[$key]['name'] = $_POST['name'];
			$articles[$key]['img'] = $_POST['img'];
			$articles[$key]['description'] = $_POST['description'];
			$articles[$key]['categories'] = array();
			foreach ($categories as $category)
			{
				if ($_POST[$category] === "on")
					$articles[$key]['categories'][] = $category;
			}
			$articles[$key]['price'] = $_POST['price'];
			unset($_POST);
			file_put_contents("../table/articles.csv", serialize($articles));
			return $articles;
		}
	}
	return $articles;
}

function modif_categories($categories)
{
	foreach($categories as &$category)
	{
		if ($category === $_POST['old'])
		{
			$category = $_POST['new'];
			file_put_contents("../table/categories.csv", serialize($categories));
			unset($_POST);
		}
	}
	return $categories;
}

?>
