#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return ;
}

array_shift($argv);

if (strstr($argv[1], "+"))
	echo $argv[0] + $argv[2]."\n";
if (strstr($argv[1], "-"))
	echo $argv[0] - $argv[2]."\n";
if (strstr($argv[1], "*"))
	echo $argv[0] * $argv[2]."\n";
if (strstr($argv[1], "/"))
	echo $argv[0] / $argv[2]."\n";
if (strstr($argv[1], "%"))
	echo $argv[0] % $argv[2]."\n";
?>
