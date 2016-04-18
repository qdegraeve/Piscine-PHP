#!/usr/bin/php
<?PHP
while (42)
{
	echo "Entrez un nombre: ";
	if (fscanf(STDIN, "%s\n", $number) == 1)
	{
		if (is_numeric($number) == TRUE)
		{
			if (($i = $number % 2) == 0)
				echo "Le chiffre $number est Pair\n";
			else
				echo "Le chiffre $number est Impair\n";
		}
		else
			echo "'$number' n'est pas un chiffre\n";
	}
	else
	{
		if (feof(STDIN) == TRUE)
		{
			echo "^D\n";
			return ;
		}
		else
			echo "' ' n'est pas un chiffre\n";
	}
}
?>
