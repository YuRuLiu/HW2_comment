<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';//不會改變陣列內容
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>