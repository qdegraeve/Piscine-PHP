<?php
$file = '../private/passwd';
$folder = 'private';

if (!$_POST['login'] || !$_POST['passwd'])
{
	echo "ERROR\n";
	return ;
}
else
	$data = array('login' => $_POST['login'], 'passwd' => hash(whirlpool, $_POST['passwd']));

if (!file_exists($folder))
	mkdir($folder);

if (!file_exists($file))
{	
	$base = array($data);
	file_put_contents($file, serialize($base));
}
else
{
	$base = unserialize(file_get_contents($file));
	foreach ($base as $people)
	{
		if ($people['login'] === $data['login'])
		{
			echo "ERROR\n";
			return ;
		}
}
	$base[] = $data;
	file_put_contents($file, serialize($base));
}
echo "OK\n";
?>
