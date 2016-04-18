<?php
$file = '../private/passwd';
$folder = 'private';
$error = 0;

if (!$_POST['login'] || !$_POST['passwd'])
	$error++;
else
	$data = array('login' => $_POST['login'], 'passwd' => hash(whirlpool, $_POST['passwd']));

if (!file_exists($folder))
	mkdir($folder);

if (!file_exists($file))
	$base = array($data);
else
{
	$base = unserialize(file_get_contents($file));

	foreach ($base as $people)
	{
		if ($people['login'] === $data['login'])
			$error++;
	}
}


if ($error === 0)
{
	header('Location: /ex04/index.html');
	$base[] = $data;
	file_put_contents($file, serialize($base));
	echo "OK\n";
}
else
	echo "ERROR\n";

?>
