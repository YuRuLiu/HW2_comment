<?php
	$score = 95;
	if ($score >=60 && $score < 70) //60分~69分為D
	{
		echo 'D';
	} 
	elseif ($score>=70 && $score<80) //70分~79分為C
	{
		echo 'C';
	} 
	elseif ($score>=80 && $score<90) //80~89分為B
	{
		echo 'B';		
	} 
	elseif ($score>=90 && $score<=100) //90~100分為A
	{
		echo 'A';		
	} 
	else 
	{
		echo 'Fail'; //其他則顯示Fail
	}
?>