<?php
$bloodType[] = 'A';//不加數字會自動編號，也可以在中括號中輸入數字編碼
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br>";
}
?>