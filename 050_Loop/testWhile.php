<?php
$iSum = 0;
$i = 1;
while ($i <= 10)
{
	$iSum += $i;
	$i += 1;
}
echo $iSum;//顯示55

echo "<hr>";

$iSum = 0;
$i = 0;
while ($i < 10)
{
	$i++;
	$iSum += $i;	
}
echo $iSum//顯示55
?>