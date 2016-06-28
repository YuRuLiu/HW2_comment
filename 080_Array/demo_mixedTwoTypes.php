<?php
header("content-type:text/html;charset=utf-8");//有指定就用指定key，沒指定就是數字
$a = array(          'xxx', 
           'book' => '書籍', 
                     'yyy', 
           'desk' => '書桌', 
           'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}

?>