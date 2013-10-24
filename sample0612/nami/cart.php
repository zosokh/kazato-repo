<?php


  require 'common.php';

// 入力受け取り
$vo = receiveInput($_POST);
$vo['post'] = $_POST;

// 全商品の合計注文個数
$totalQty = 0;
foreach ($ITEMS as $item) {
    $totalQty += $vo['itemData'][$item['id']]['qty'];
}

// 全ての商品が未選択だった場合
if (0 == $totalQty){
    assert(! headers_sent());
    $params = $_POST;
    $params[PARAM_ERROR] = '数量をえらんでください。';
    header('Location: itemdetail_info.php?' .$_POST['code']."&".arrayToUrlParameter($params));
    exit;
}

  $rows = array();
  $sum = 0;
  $pdo = $db_selected;
  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
  if (@$_POST['submit']) {
    @$_SESSION['cart'][$_POST['code']] += $_POST['num'];
  }
  print_r($_SESSION['cart']);
  foreach($_SESSION['cart'] as $code => $num) {
    $st = $pdo->prepare("SELECT * FROM ITEMS WHERE id=?");
    $st->execute(array($code));
    $row = $st->fetch();
    $st->closeCursor();
    $row['num'] = strip_tags($num);
    // $sum += $num * $row['price'];
    $rows[] = $row;
  }


  require 'view/t_cart.php';
?>