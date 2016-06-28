<?php

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0)
		    break;
		    //continue; //跳過這層迴圈，執行外面那層
		    //continue 2; //跳過2層迴圈，以此類推，break也是同理
		    //懶人用goto
	}
	echo "-----<br>";
}


?>