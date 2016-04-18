#!/usr/bin/php
<?PHP
function	ft_null($str)
{
	if ($str == NULL)
		return (FALSE);
	else
		return (TRUE);
}

if ($argc == 2)
{
	$tab = explode(" ", $argv[1]);
	$tab = array_filter($tab, "ft_null");

	$i = 0;
	foreach ($tab as $word)
	{
		if ($i > 0)
			echo " ";
		echo $word;
		$i++;
	}
	echo "\n";
}
?>
