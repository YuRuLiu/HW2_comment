<?php
function ShowStar($iCount, $sWhat = "*")//可以設定有幾個符號，也可以設定符號，符號預設為"*"
{
	if($iCount < 0)
	{
		echo "error";
	}
	else
	{
		$result = "";
		for ($i = 1; $i <= $iCount; $i++)
		{
			$result .= $sWhat;
		}
		echo $result;
	}
	
}

$iHowMany = 2;
ShowStar($iHowMany,"#");
?>