<?php
function	auth($mail, $passwd, $users)
{
	$file = '../table/users.csv';

	if (!file_exists($file) || !$mail || !$passwd)
	{
		$_SESSION['error'] = "There is no users.csv in table folder, please reset installation with install.php script";
		unset($_POST);
		return (FALSE);
	}
	else
	{
		foreach ($users as $key => $user)
		{
			if ($user['mail'] == $mail && $user['passwd'] == hash('whirlpool', $passwd))
			{
				unset($_POST);
				return ($key);
			}
		}
		$_SESSION['error'] = "Invalid login/password";
		return FALSE;
	}
}
?>
