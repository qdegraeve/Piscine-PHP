<?PHP

header('Content-Type: text/html');
header('HTTP 1.0, assume close after body');

if (!$_SERVER['PHP_AUTH_USER']) 
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('Connection: close');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	exit;
}

else
{
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
		echo "<html><body>";
		echo "Bonjour Zaz<br />";
		$img = base64_encode(file_get_contents('42.png'));
		echo "<img src=\"data:image/png;base64, $img\">\n";
	}
	else
	{
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
}

?>
