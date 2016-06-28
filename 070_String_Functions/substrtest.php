<?php
    header("content-type: text/html; charset=utf-8");
    
    $str1 = "洋基隊  NYY";
    $str2 = "釀酒人隊  MIL";
    
    $result1 = substr($str1,11,3);//一個中文字佔 3 bytes，從0開始算，所以"N"的位置是11
    $result2 = substr($str2,14,3);//一個中文字佔 3 bytes，從0開始算，所以"M"的位置是11
    
    echo $result1."<br>".$result2;
?>