<?php
  require 'common.php';
  $error = '';
  $pdo = $db_selected;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

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
      $pdo->query("UPDATE ITEMS SET id='$id' , name='$name',comment='$comment' , color='$color',price=$price WHERE id='$id'");
      header('Location: index.php');
      exit();
    }
  } else {
    $id = $_GET['id'];
    $st = $pdo->query("SELECT * FROM ITEMS WHERE id='$id'");
    $row = $st->fetch();
    // $st->closeCursor();
    $name = $row['name'];
    $comment = $row['comment'];
    $price = $row['price'];
    $color = $row['color'];
  }
  
  require 'view/edit.php';
?>