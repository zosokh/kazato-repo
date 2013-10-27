<meta charset="utf-8">
<?php
require 'common.php';
$pdo = $db_selected;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $error = '';
  
  if (@$_POST['submit']) {
  	$filename = "../image/" . $_FILES["pic"]["name"];
    $id = $_POST['id'];
    $img = "image/" . $_FILES["pic"]["name"];

    echo "アップロードファイル名　：　" , $_FILES["pic"]["name"] , "<BR>";
	echo "MIMEタイプ　：　" , $_FILES["pic"]["type"] , "<BR>";
	echo "ファイルサイズ　：　" , $_FILES["pic"]["size"] , "<BR>";
	echo "テンポラリファイル名　：　" , $_FILES["pic"]["tmp_name"] , "<BR>";
	echo "エラーコード　：　" , $_FILES["pic"]["error"] , "<BR>";

    if (move_uploaded_file($_FILES['pic']['tmp_name'], $filename)) {
    	$pdo->query("UPDATE ITEMS SET img='$img' WHERE id='$id'");
    	echo "アップロード成功！！";
    	// header('Location: index.php');
    	// exit();
    } else {
      $error .= 'ファイルを選択してください。<br>';
      $error .= 'アップロード失敗';
    }
  } else {
    $id = $_GET['id'];
  }
  
  showUpload();

?>
