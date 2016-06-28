<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);//A1,A18,A2
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);//A1,A2,A18
	var_dump($testArray);
?>
