<?php
$f = fopen("pick3.txt", "r");//打開檔案
while (!feof($f))//讀取資料直到沒有為止
{
	$line = fgets($f);//fgets()一次讀一行 
	echo "$line<br>";
}
fclose($f);//關閉檔案
echo "--End--";
?>