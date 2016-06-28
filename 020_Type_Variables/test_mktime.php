<?php
  $d = mktime(13, 30, 0, 9, 10, 2012); //時分秒月日年
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);//大寫Y顯示4位數，大寫H顯示24小時制
?>
