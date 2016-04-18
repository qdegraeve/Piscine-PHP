#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
		return ;
	}
	else
	{
		$txt = str_replace(" ", "", $argv[1]);
		$i = 0;
		if ((is_numeric($txt[$i])) || (($txt[$i] == "-" || $txt[$i] == "+" ) && count($nbr) == 0))
		{
			while ((is_numeric($txt[$i])) || (($txt[$i] == "-" || $txt[$i] == "+" ) && count($nbr) == 0))
			{
				if ($txt[$i] == "+")
					$i++;
				else
				{
					$nbr[] = $txt[$i];
					$i++;
				}
			}
		}
		else
		{
			echo "Syntax Error\n";
			return ;
		}
		$nb1 = implode($nbr);
		$sign = $txt[$i];
		$i++;
		if ((is_numeric($txt[$i])) || (($txt[$i] == "-" || $txt[$i] == "+" ) && count($nbr2) == 0))
		{
			while ((is_numeric($txt[$i])) || ($txt[$i] == ("-" || "+") && count($nbr2) == 0))
			{
				if ($txt[$i] == "+")
					$i++;
				else
				{
					$nbr2[] = $txt[$i];
					$i++;
				}
			}
		}
		else
		{
			echo "Syntax Error\n";
			return ;
		}
		if ($i != strlen($txt))
		{
			echo "Syntax Error\n";
			return ;
		}
		$nb2 = implode($nbr2);
		if ($sign == "+" && $nb2 != null)
			$nb1 = $nb1 + $nb2;
		else if ($sign == "-" && $nb2 != null)
			$nb1 = $nb1 - $nb2;
		else if ($sign == "/" && $nb2 != null)
			$nb1 = $nb1 / $nb2;
		else if ($sign == "*" && $nb2 != null)
			$nb1 = $nb1 * $nb2;
		else if ($sign == "%" && $nb2 != null)
			$nb1 = $nb1 % $nb2;
		else
		{
			echo "Syntax Error\n";
			return ;
		}
		echo $nb1."\n";
	}
?>
