<?php
	header("content-type: text/html; charset=utf-8");
	$contents = file_get_contents('data.txt');//file_get_contents讀取
	echo (str_replace("\r\n", "<br />", $contents));
?>