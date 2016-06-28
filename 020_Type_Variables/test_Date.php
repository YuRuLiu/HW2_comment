<?php
  $x = getdate();
  //var_dump($x);
  echo gettype($x), "<br>";//getdate是陣列
  
  $x = date('Y-m-d H:i:s');//當地時間
  echo $x, "<br>";
  echo gettype($x), "<br>";//date('Y-m-d H:i:s')是字串
  
  $x = gmdate('Y-m-d H:i:s');//格林威治標準時間
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));//時間戳記: 從 1970-01-01 00:00:00 算到特定時刻所經過的秒數。
  echo $x, "<br>";
  echo gettype($x), "<br>";//strtotime()是整數
  
?>