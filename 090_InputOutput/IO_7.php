<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");//"r"->read;"w"->write

while (!feof($f))//判斷是否為檔案結尾
{
	$line = fgets($f);//讀一行不包括換行符號
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

/*

------不會讀到最後一行------
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");//"r"->read;"w"->write

$line = fgets($f);
while (!feof($f))//判斷是否為檔案結尾
{
	$sData .= Trim($line) . "<br>";
	$line = fgets($f);
}
fclose($f);
echo $sData;

*/

?>
