#!/usr/bin/php
<?PHP
function	ft_null($str)
{
	if ($str == NULL)
		return (FALSE);
	else
		return (TRUE);
}

if ($argc > 1)
{
	$tab = explode(" ", $argv[1]);
	$tab = array_filter($tab, "ft_null");
	$first = array_shift($tab);

	foreach ($tab as $word)
		echo $word." ";

	echo $first."\n";
}
?>
