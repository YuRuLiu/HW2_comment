<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );//匯入檔案
foreach ( $lines as $line_num => $line )
{
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//htmlspecialchars處理特殊字元，讓它正常顯示
}

?> 