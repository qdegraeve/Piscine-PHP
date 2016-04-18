#!/usr/bin/php
<?PHP
if ($argc > 2)
{
	array_shift($argv);

	$to_find = array_shift($argv);

	foreach ($argv as $entry)
	{
		$b = explode(':', $entry);
		$stock[$b[0]] = $b[1];
	}

	foreach($stock as $key => $param)
	{
		if ($key === $to_find)
			echo $param."\n";
	}
}
?>
