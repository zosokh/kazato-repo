<?php
  require 'common.php';
  $error = $name = $comment = $price = '';
  $pdo = $db_selected;
  if (@$_POST['submit']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    if (!$name) $error .= '商品名がありません。<br>';
    if (!$comment) $error .= '商品説明がありません。<br>';
    if (!$price) $error .= '価格がありません。<br>';
    if (preg_match('/\D/', $price)) $error .= '価格が不正です。<br>';
    if (!$error) {
      $pdo->query("INSERT INTO ITEMS(id,name,comment,price,color) VALUES('$id','$name','$comment',$price,'$color')");
      header('Location: index.php');
      exit();

       // print_r($ITEMS);
    }
  }
  // ビューを表示
  showInsert();
?>