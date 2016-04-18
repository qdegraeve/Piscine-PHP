#!/usr/bin/php
<?PHP

$handle = fopen('/var/run/utmpx' , rb);
$str = fread($handle, 10000);
$array = unpack('A32name/A4/ A32 i s s s b b i i i i5 s A257 b', $str);

print_r($array);

echo $str."\n";
?>
