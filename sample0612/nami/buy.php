<?php

require_once 'common.php';

// 入力を受け取る
$vo = receiveInput($_GET);

// ビューを表示
showBuy($vo);
