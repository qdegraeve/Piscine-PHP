<?PHP
function	ft_null($str)
{
	if ($str == NULL)
		return (FALSE);
	else
		return (TRUE);
}

function	ft_split($str)
{
	$tab = explode(" ", $str);
	$tab = array_filter($tab, "ft_null");
	sort($tab, SORT_STRING);
	return ($tab);
}
?>
