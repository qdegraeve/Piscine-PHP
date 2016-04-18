<?php

function delete_user($users)
{
	unset($users[$_POST['id']]);
	file_put_contents("../table/users.csv", serialize($users));
	unset($_POST);
	return $users;
}

function delete_article($articles)
{
	unset($articles[$_POST['id']]);
	file_put_contents("../table/articles.csv", serialize($articles));
	unset($_POST);
	return $articles;
}

function delete_category($categories)
{
	unset($categories[$_POST['id']]);
	file_put_contents("../table/categories.csv", serialize($articles));
	unset($_POST);
	return $categories;
}
?>
