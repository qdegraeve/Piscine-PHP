<?php

session_start();

include 'auth.php';

if (auth($_POST['login'], $_POST['passwd']) == TRUE)
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
	echo '<iframe src="/ex04/chat.php" 
		width="100%" 
		height="550" 
		style="border:1px solid red">
		</iframe>
		<iframe src="/ex04/speak.php" 
		width="100%" 
		height="50" 
		style="border:1px solid red">
		</iframe>';
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}

?>
