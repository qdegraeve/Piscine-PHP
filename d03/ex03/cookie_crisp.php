<?PHP

if ($_GET['action'] == "set")
	setcookie($_GET['name'], $_GET['value'], time()+3600);

elseif ($_GET['action'] == 'get')
{
	$name = $_GET['name'];
	if ($_COOKIE[$name] !== NULL)
		echo $_COOKIE[$name]."\n";
}

elseif ($_GET['action'] == 'del')
	setcookie($_GET['name'], "caca", time()-1);

?>
