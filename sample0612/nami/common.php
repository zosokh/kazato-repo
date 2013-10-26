<?php

session_start();

assert_options(ASSERT_BAIL, 1);

define('PARAM_GUESTNAME', 'guestname');
define('PARAM_PHONE', 'phone');
define('PARAM_ADDRESS', 'address');
define('PARAM_ERROR', 'itemError');

// $ITEMS = array(     array('id' => 'iphonecase', 'img' => 'image/goods_iphone_cover.jpg', 'name' => 'iPhone Cover'),
//                     array('id' => 'gz1', 'img' => 'image/goods_gazelle_1.jpg', 'name' => 'GAZLLE_first'),
//                     array('id' => 'gz2', 'img' => 'image/goods_gazelle_2.jpg', 'name' => 'GAZLLE_second')
// );

require 'dbmysql.php';

// $COLOR_LABEL = array(
// 	'red' => 'レッド',
// 	'blue' => 'ブルー',
// 	'green' => 'グリーン',
// );

function receiveInput($input) {
	global $ITEMS;

	assert(is_array($input));

	// 入力バリデーション
	/// エラー
	$itemError = false;
	if (isset($input[PARAM_ERROR])) {
		$itemError = $input[PARAM_ERROR];
	}

	/// お客様名前
	$guestname = '';
	if (isset($input[PARAM_GUESTNAME])) {
		$guestname = $input[PARAM_GUESTNAME];
	}

	/// 電話番号
	$phone = '';
	if (isset($input[PARAM_PHONE])) {
		$phone = $input[PARAM_PHONE];
	}

	/// 住所
	$address = '';
	if (isset($input[PARAM_ADDRESS])) {
		$address = $input[PARAM_ADDRESS];
	}

	/// アイテム
	$itemData = array();
	foreach ($ITEMS as $item) {
		$itemId = $item['id'];
		$itemQty = 0;
		$itemColor = 'notselected';
		if (isset($input[paramNameForItemQuantity($itemId)])) {
			$itemQty = $input[paramNameForItemQuantity($itemId)];
		}
		if (isset($input[paramNameForItemColor($itemId)])) {
			$itemColor = $input[paramNameForItemColor($itemId)];
		}
		$itemData[$itemId] = array(
			'qty' => $itemQty,
			'color' => $itemColor,
		);
	}

	return array(
		'itemError' => $itemError,
		'guestname' => $guestname,
		'phone' => $phone,
		'address' => $address,
		'itemData' => $itemData,
	);
}

function arrayToUrlParameter($arr) {
	$ret = '';
	foreach ($arr as $k => $v) {
		if ('' != $ret) {
			$ret .= '&';
		}
		$ret .= $k . '=' . rawurlencode($v);
	}
	return $ret;
}

function optionTag($value, $inputValue, $label) {
	$ret = '<option value="' . $value . '"';
	if ($value == $inputValue) {
		$ret .= ' selected="selected"';
	}
	$ret .= '>' . $label . '</option>';
	return $ret;
}

function hiddenTags($input) {
	assert(is_array($input));

	$ret = '';
	foreach ($input as $k => $v) {
		$ret .= '<input type="hidden" name="' . $k . '" value="' . $v . '" />';
	}
	return $ret;
}

function paramNameForItemColor($id) {
	assert(is_string($id));
	return 'color_' . $id;
}

function paramNameForItemQuantity($id) {
	assert(is_string($id));
	return 'qty_' . $id;
}

function showForm($vo) {
	global $ITEMS, $COLOR_LABEL;

	assert(is_array($vo));

	// 関数内でrequireすることで$voとグローバル宣言した変数以外は利用できなくなり安全になる
	require_once 'view/form.php';
}

function showPreview($vo) {
	global $ITEMS, $COLOR_LABEL;

	assert(is_array($vo));

	// 関数内でrequireすることで$voとグローバル宣言した変数以外は利用できなくなり安全になる
	require_once 'view/preview.php';
}

function showBuy($vo) {
	global $ITEMS, $COLOR_LABEL;

	assert(is_array($vo));

	// 関数内でrequireすることで$voとグローバル宣言した変数以外は利用できなくなり安全になる
	require_once 'view/buy.php';
}

function showCompleted($vo) {
	global $ITEMS, $COLOR_LABEL ,$rows, $sum;

	assert(is_array($vo));

	// 関数内でrequireすることで$voとグローバル宣言した変数以外は利用できなくなり安全になる
	require_once 'view/completed.php';
}


function showItemdetail($vo) {
	global $ITEMS, $COLOR_LABEL;

	assert(is_array($vo));

	// 関数内でrequireすることで$voとグローバル宣言した変数以外は利用できなくなり安全になる
	require_once 'view/itemdetail.php';
}


function colorChecker(){
	global $item , $vo , $COLOR_LABEL;
	if ($item['color'] == "none"){
		echo optionTag('色指定なし' , $vo['itemData'][$item['id']]['color'] , "色指定不可");
	} else{
		echo optionTag('red', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['red']);
        echo optionTag('blue', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['blue']);
        echo optionTag('green', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['green']);
        print_r($item['color'] );
	}
}

function flont_error_qty(){
  global $totalQty;
    // 全ての商品が未選択だった場合
    if (0 == $totalQty){
        assert(! headers_sent());
        $params = $_POST;
        $params[PARAM_ERROR] = '数量をえらんでください。';
        header('Location: itemdetail_info.php?' .$_POST['code']."&".arrayToUrlParameter($params));
        exit;
    }
}
