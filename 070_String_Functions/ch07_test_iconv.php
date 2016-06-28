<?php
  // header("content-type: text/html; charset=utf-8");
  header("content-type: text/html; charset=big5");//大五碼
  $s = "許功蓋";
  echo strlen($s), ", ";  // 9
  echo strlen(iconv("UTF-8", "big5", $s));
  echo "<HR>";
  echo iconv("UTF-8", "big5", $s);//編碼轉換
?>
