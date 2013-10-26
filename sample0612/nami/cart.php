<?php


  require 'common.php';

// 入力受け取り
$vo = receiveInput($_POST);
$vo['post'] = $_POST;

// 商品の合計注文個数と商品カラーの変数化
$totalQty = 0;
foreach ($ITEMS as $item) {
    if (0 == $vo['itemData'][$item['id']]['qty']) {
      continue;
  }
    $totalQty += $vo['itemData'][$item['id']]['qty'];
    $selectcolor = $COLOR_LABEL[$vo['itemData'][$item['id']]['color']];
}

// print_r($selectcolor);

if (!array_key_exists( 'callcart',$_GET )){
    flont_error_qty();
}

  $rows = array();
  $sum = 0;
  $pdo = $db_selected;
  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
  if (@$_POST['submit']) {
    @$_SESSION['cart'][$_POST['code']] += $totalQty;
  }
  if (!isset($_SESSION['color'])) $_SESSION['color'] = array();
  if (@$_POST['submit']) {
    @$_SESSION['color'][$_POST['code']] = $selectcolor;
  }
  // print_r($_SESSION['cart']);
  // print_r($_SESSION['color']);
  foreach($_SESSION['cart'] as $code => $num) {
    $st = $pdo->prepare("SELECT * FROM ITEMS WHERE id=?");
    $st->execute(array($code));
    $row = $st->fetch();
    $st->closeCursor();
    $row['num'] = strip_tags($num);
    $row['selectcolor'] = $_SESSION['color'][$row['id']] ;
    $sum += $num * $row['price'];
    $rows[] = $row;
    // print_r($row);
  }

  



  require 'view/t_cart.php';
?>