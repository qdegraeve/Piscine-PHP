<?php
$file = '../private/passwd';

$error = 1;
if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] 
	|| !file_exists($file) || $_POST['submit'] !== "OK")
	$error++;
else
{
	$base = unserialize(file_get_contents($file));
	$cont = 0;
	foreach ($base as $people)
	{
		if ($people['login'] === $_POST['login'] &&
			$people['passwd'] === hash('whirlpool', $_POST['oldpw']))
		{
			$base[$cont]['passwd'] = hash('whirlpool', $_POST['newpw']);
			file_put_contents($file, serialize($base));
			$error === 0;
		}
		$cont++;
	}
}

if ($error === 0)
{
	header('Location: index.html');
	echo "OK\n";
}
else
	echo "ERROR\n";
?>
