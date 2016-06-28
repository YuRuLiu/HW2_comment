<?php
$a = 20;
function myfunction($b) {
	//print "a=$a<br>";
	$a = 30;
	//print "a=$a<br>";
	global $a, $c; //加上global可以看到並使用function外的變數
	//print "a=$a<br>";
	return $c = ($b + $a); //將$c的值傳出去
}
print myfunction(40) + $c; //120

/*---------------------------------------
$a = 20;
function myfunction($b) {
	$a = 30;
	global $a; //加上global可以看到並使用function外的變數
	return $c = ($b + $a); //將$c的值傳出去
}
print myfunction(40) + $c; //60
---------------------------------------*/

/*---------------------------------------
$a = 20;
function myfunction($b) {
	$a = 30;
	global $c; //加上global可以看到並使用function外的變數
	return $c = ($b + $a); //將$c的值傳出去
}
print myfunction(40) + $c; //140
---------------------------------------*/

/*---------------------------------------
$a = 20;
function myfunction($b) {
	$a = 30;
	return $c = ($b + $a); //將$c的值傳出去
}
print myfunction(40) + $c; //70
---------------------------------------*/
?>