#!/usr/bin/php
<?PHP
function	ft_null($str)
{
	if ($str == NULL)
		return (FALSE);
	else
		return (TRUE);
}


function	ft_is_letter($var)
{
	if (($var >= "A" && $var <= "Z") || ($var >= "a" && $var <= "z"))
		return (TRUE);
	else
		return (FALSE);
}

function	ft_is_none($var)
{
	if (ft_is_letter($var) == FALSE && is_numeric($var) == FALSE)
		return (TRUE);
	else
		return (FALSE);
}

function	my_strcmp($s1, $s2)
{
	$j = strlen($s1 = strtolower($s1));
	$k = strlen($s2 = strtolower($s2));
	$l = min($j, $k);

	for ($i = 0; $i < $l; $i++)
		if (($a = $s1[$i]) != ($b = $s2[$i]))
			break ;

	if ($i == $l)
		$ret = $j - $k;
	elseif ((ft_is_letter($a) && ft_is_letter($b)) || (is_numeric($a) && is_numeric($b)) || (ft_is_none($a) && ft_is_none($b)))
		$ret = (ord($a) - ord($b));
	elseif ((ft_is_letter($a) && (is_numeric($b) || ft_is_none($b))) || (is_numeric($a) && ft_is_none($b)))
		$ret = (-1);
	elseif ((is_numeric($a) && ft_is_letter($b)) || (ft_is_none($a) && (ft_is_letter($b) || is_numeric($b))))
		$ret = (1);
	return ($ret);
}

array_shift($argv);

$tab = array();

foreach ($argv as $arg)
{
	$tmp = explode(" ", $arg);
	$tab = array_merge($tab, $tmp);
}

$tab = array_filter($tab, "ft_null");
usort($tab, "my_strcmp");

foreach($tab as $elem)
	echo $elem."\n";
?>
