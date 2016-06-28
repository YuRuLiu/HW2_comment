<?php
header("Content-Type: image/png");//預設為text/html，圖片檔設定為image/png

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>