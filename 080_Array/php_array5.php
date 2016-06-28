<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：";

// for($i=0;$i<4;$i++)
// {
//     $value = $season[$i];
//     echo $value;
// }
/*以下作法等同以上註解*/
foreach ($season as $value){ //foreach(array as value)
	echo $value;
}

?>