<?php
   $d = strtotime("2012-09-10");//時間戳記: 從 1970-01-01 00:00:00 算到特定時刻所經過的秒數。
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  echo $d; 
  echo "<br>";
  echo date("Y-m-d", $d);
?>
