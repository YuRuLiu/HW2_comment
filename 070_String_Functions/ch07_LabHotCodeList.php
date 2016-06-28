<?php
//header("content-type: text/html;charset=utf-8");
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);//strlen找字串記憶體大小
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);//substr(字串,開始位置,長度)
	$result = $ch . str_replace($ch, "", $result);//str_replace(要被代替的值,代替的值,字串)

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>