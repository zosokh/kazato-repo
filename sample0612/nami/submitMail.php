<?php

require 'common.php';

// 入力受け取り
$vo = receiveInput($_POST);
$vo['post'] = $_POST;


// 電話番号、住所の入力チェック
if (! preg_match('/^[\w\d]+$/', $vo['phone']) || '' == trim($vo['address']) || '' == trim($vo['guestname'])) {
    assert(! headers_sent());
    $params = $_POST;
    $params[PARAM_ERROR] = '記入内容をご確認ください';
    header('Location: buy.php?' . arrayToUrlParameter($params));
    exit;
}


$name = htmlspecialchars($_POST['guestname']);
$tel = htmlspecialchars($_POST['phone']);
$address = htmlspecialchars($_POST['address']);

$pdo = $db_selected;
$body = "商品が購入されました。\n\n"
. "お名前: $name\n"
. "ご住所: $address\n"
. "電話番号: $tel\n\n";

$rows = array();
  $sum = 0;
foreach($_SESSION['cart'] as $code => $num) {
$st = $pdo->prepare("SELECT * FROM ITEMS WHERE id=?");
$st->execute(array($code));
$row = $st->fetch();
$st->closeCursor();
$row['num'] = strip_tags($num);
$row['selectcolor'] = $_SESSION['color'][$row['id']] ;
$sum += $num * $row['price'];
$rows[] = $row;
$body .= "商品名: {$row['name']}\n"
  . "単価: {$row['price']} 円\n"
  . "数量: $num\n\n";
}
mb_language("Ja") ;
mb_internal_encoding("UTF-8") ;
$from = "localhost";
$to = "zosokh@gmail.com";
mb_send_mail($to, "購入メール", $body, "From: $from");


// print_r($_SESSION['cart']);
// print_r($body);



showCompleted($vo);
$_SESSION['cart'] = null;
