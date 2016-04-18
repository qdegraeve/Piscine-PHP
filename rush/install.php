#!/usr/bin/php
<?php
if (!file_exists("table"))
	mkdir("table");
$users = array();
$users[1]['id'] = 1;
$users[1]['firstname'] = "root";
$users[1]['lastname'] = "root";
$users[1]['mail'] = "root@root.fr";
$users[1]['passwd'] = hash('whirlpool', "root");
$categories = array();
$categories[1] = "Debutant";
$categories[2] = "Intermediaire";
$categories[3] = "Confirme";
$categories[4] = "Homme";
$categories[5] = "Femme";
$categories[6] = "Rabais";
$articles = array();
$articles[1]['id'] = 1;
$articles[1]['name'] = "sdelardi";
$articles[1]['description'] = "ceci est un dev";
$articles[1]['img'] = "https://cdn.intra.42.fr/userprofil/sdelardi.jpg";
$articles[1]['price'] = 50;
$articles[1]['categories'] = array();
$articles[1]['categories'][0] = "Confirme";
$articles[1]['categories'][1] = "Homme";
$articles[1]['categories'][2] = "Intermediaire";
$articles[1]['categories'][3] = "Confirme";
$articles[1]['categories'][4] = "Femme";
$articles[1]['categories'][5] = "Rabais";
$articles[1]['categories'][5] = "Debutant";
$articles[2]['id'] = 2;
$articles[2]['name'] = "qdegraev";
$articles[2]['description'] = "ceci est un dev";
$articles[2]['img'] = "https://cdn.intra.42.fr/userprofil/qdegraev.jpg";
$articles[2]['price'] = 60;
$articles[2]['categories'] = array();
$articles[2]['categories'][0] = "Confirme";
$articles[2]['categories'][1] = "Homme";
$articles[2]['categories'][2] = "Intermediaire";
$articles[2]['categories'][3] = "Confirme";
$articles[2]['categories'][4] = "Femme";
$articles[2]['categories'][5] = "Rabais";
$articles[2]['categories'][5] = "Debutant";

if (file_put_contents("table/articles.csv", serialize($articles)) === false)
	echo "Error when creating table articles.csv, verify if the file already exists and can't be accessed\n";
else
	echo "Table articles.csv created\n";
if (file_put_contents("table/users.csv", serialize($users)) === false)
	echo "Error when creating table users.csv, verify if the file already exists and can't be accessed\n";
else
	echo "Table users.csv created\n";
if (file_put_contents("table/basket.csv", "") === false)
	echo "Error when creating table basket.csv, verify if the file already exists and can't be accessed\n";
else
	echo "Table basket.csv created\n";
if (file_put_contents("table/categories.csv", serialize($categories)) === false)
	echo "Error when creating table basket.csv, verify if the file already exists and can't be accessed\n";
else
	echo "Table basket.csv created\n";
?>
