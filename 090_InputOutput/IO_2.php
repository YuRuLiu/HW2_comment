<?php

$fileDir = dirname ( __FILE__ );//取得目錄路徑不含檔名
$fileResource = opendir ( $fileDir );//開啟目錄處理

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?><!--readdir讀取檔案-->
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
