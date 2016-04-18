<?php

function	auth($login, $passwd)
{
	$file = '../private/passwd';

	if (!file_exists($file) || !$login || !$passwd)
		return (FALSE);
	else
	{
		$base = (unserialize(file_get_contents($file)));
		foreach ($base as $user)
			if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $passwd))
				return (TRUE);
		return (FALSE);
	}
}

?>
