#!/usr/bin/php
<?PHP
$tab = array();

$tab[] = "Tout simplement pour qu'en feuilletant le sujet\non ne s'apercoive pas de la nature de l'exo\n";
$tab[] = "Parce que Kwame a des enfants\n";
$tab[] = "Nan c'est parce que c'est le premier avril\n";
$tab[] = "Oui il a vraiment des enfants\n";
$tab[] = "Fouiny si j'te leche la chatte t'auras ma barbe dans ton cul !!!\n";

if ($argc > 1)
	echo $tab[rand(0, 4)];
?>
