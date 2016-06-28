<?php
  $x = 123;//是integer
  echo gettype($x), "<br>";//gettype是取得資料型態
  
  $x = 123.0;//有小數點，是double
  echo gettype($x), "<br>";

  $x = "123.0";//有""，是string
  echo gettype($x), "<br>";
  
  $x = TRUE;//TRUE/FALSE，是bollean
  echo gettype($x), "<br>";
  
?>
