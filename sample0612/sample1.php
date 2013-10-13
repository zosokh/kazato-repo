<?php

$itemCnt = 0;
if (isset($_GET['itemCnt'])) {
	$itemCnt = $_GET['itemCnt'];
}

$hasError = false;
if (isset($_GET['hasError'])) {
	$hasError = true;
}


?>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html: charset=utf-8;" />
</head>
<body>
	<?php
	if ($hasError) {
		echo '<p>エラーがあったみたいだよ</p>';
	}
	?>

<form action="sample2.php" method="get">
<p>
	アイテム個数
	<input type="text" name="itemCnt" value="<?php echo $itemCnt ?>" />
</p>
<p>
	エラーを出しますか？
	<input type="checkbox" name="hasError" value="1" />
</p>
<p>
	<input type="submit" value="sapmle2.phpに送信する" />
</p>

</form>
</body></html>
