<?php
$file = 'private/passwd';

if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] 
	|| !file_exists($file) || $_POST['submit'] !== "OK")
{
	echo "ERROR\n";
	return ;
}
else
{
	//$data = array('login' => $_POST['login'], 'passwd' => hash(whirlpool, $_POST['newpw']));
	$base = unserialize(file_get_contents($file));
	$cont = 0;
	foreach ($base as $people)
	{
		if ($people['login'] === $_POST['login'] &&
			$people['passwd'] === hash('whirlpool', $_POST['oldpw']))
		{
			$base[$cont]['passwd'] = hash('whirlpool', $_POST['newpw']);
			file_put_contents($file, serialize($base));
			echo "OK\n";
			return ;
		}
		$cont++;
	}
	echo "ERROR\n";
	return ;
}
?>
