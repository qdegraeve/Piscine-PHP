#!/usr/bin/php
<?PHP

date_default_timezone_set('UTC');
setlocale(LC_TIME, "fr_FR");

if ($argc > 1)
{
	if (preg_match("/^((l|L)undi|(m|M)ardi|(m|M)ercredi|(j|J)eudi|(v|V)endredi|(s|S)amedi|(d|D)imanche) [1-3]?[0-9]{1} ((j|J)anvier|(f|F)[eé]vrier|(M|m)ars|(a|A)vril|(m|M)ai|(j|J)uin|(j|J)uillet|(a|A)o[uû]t|(s|S)eptembre|(o|O)ctobre|(n|N)ovembre|(d|D)[ée]cembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/", $argv[1]) != 1)
		echo "Wrong format\n";
	else
	{
		$date = $argv[1];
		$date = preg_replace("/(j|J)anvier/", "1", $date);
		$date = preg_replace("/(f|F)[é]vrier/", "2", $date);
		$date = preg_replace("/(m|M)ars/", "3", $date);
		$date = preg_replace("/(a|A)vril/", "4", $date);
		$date = preg_replace("/(m|M)ai/", "5", $date);
		$date = preg_replace("/(j|J)uin/", "6", $date);
		$date = preg_replace("/(j|J)uillet/", "7", $date);
		$date = preg_replace("/(a|A)o[ûu]t/", "8", $date);
		$date = preg_replace("/(s|S)eptembre/", "9", $date);
		$date = preg_replace("/(o|O)ctobre/", "10", $date);
		$date = preg_replace("/[nN]ovembre/", "11", $date);
		$date = preg_replace("/(d|D)[eé]cembre/", "12", $date);

		$date = explode(" ", $date);

		$hour = explode(":", $date[4]);


		$time = mktime($hour[0], $hour[1], $hour[2], $date[2], $date[1], $date[3], 1);

		echo $time."\n";
	}
}
?>
