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
    $params[PARAM_ERROR] = '商品を選択してください';
    header('Location: index.php?' . arrayToUrlParameter($params));
    exit;
}

// 電話番号、住所の入力チェック
if (! preg_match('/^[\w\d]+$/', $vo['phone']) || '' == trim($vo['address'])) {
    assert(! headers_sent());
    $params = $_POST;
    $params[PARAM_ERROR] = '住所と電話番号をご確認ください';
    header('Location: index.php?' . arrayToUrlParameter($params));
    exit;
}

showPreview($vo);