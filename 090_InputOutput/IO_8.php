<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);
$f = fopen("data2.txt", "w");
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);//把$sData的值寫入data2.txt
}
fclose($f);
echo "-- Done --"

?>
