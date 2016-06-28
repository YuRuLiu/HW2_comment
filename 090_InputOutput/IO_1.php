<?php

echo "Path and FileName:" . __FILE__ . "<br />";
echo "Path: " . dirname ( __FILE__ )."<br />";
echo "Filename: " . basename ( __FILE__ ) . "<br />";
echo "Filesize: " . filesize ( __FILE__ );//檔案大小!=記憶體大小

?>
