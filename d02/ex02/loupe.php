#!/usr/bin/php
<?PHP

function	ft_toupper($str)
{
	return (strtoupper($str[0]));
}
function	find_more($str)
{
	$string = preg_replace_callback("#(?<=title=)(\".*)(\")#iSU", "ft_toupper", $str[0]);
	$string = preg_replace_callback("#(>)(.*)(?=<)#iSUs", "ft_toupper", $string);
	return ($string);
}

$file = file_get_contents($argv[1]);


$file = preg_replace_callback("#(<a.*<\/a>)#s", 'find_more', $file);

echo $file;
?>
