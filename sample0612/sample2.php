<?php

$itemCnt = 0;
if (isset($_POST['itemCnt'])) {
	$itemCnt = $_POST['itemCnt'];
} elseif (isset($_GET['itemCnt'])) {
	$itemCnt = $_GET['itemCnt'];
}

if (isset($_GET['hasError'])) {
	header('Location: sample1.php?hasError=1&itemCnt=' . $itemCnt);
	exit;
}

?>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="content-type" content="text/html: charset=utf-8;" />
</head>
<body>
<p>
	アイテム個数 : <?php echo $itemCnt; ?>
</p>
</body>
</html>