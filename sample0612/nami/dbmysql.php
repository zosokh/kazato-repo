<meta charset="utf-8">

<?php
// $link = mysql_connect('localhost', 'zosokh', '0000');
// if (!$link) {
//     die('接続失敗です。'.mysql_error());
// }

// print('<p>接続に成功しました。</p>');

// $db_selected = mysql_select_db('sample0612', $link);
// if (!$db_selected){
//     die('データベース選択失敗です。'.mysql_error());
// }

// print('<p>Itemsのデータベースを選択しました。</p>');


// mysql_set_charset('utf8');

// $result = mysql_query('SELECT id,img,name FROM ITEMS');
// if (!$result) {
//     die('クエリーが失敗しました。'.mysql_error());
// }

// $row = mysql_fetch_assoc($result);
// $ITEMS = array($row);
// print_r ($ITEMS);





// function charenge(){
// 	global  $result;

// 	while ($row = mysql_fetch_assoc($result)) {
// 	    print_r( $row['id']);
// 	    print_r( $row['img']);
// 	    print_r( $row['name']);
// 	}

// }


// $ITEMS = charenge();

// print_r ($ITEMS);




$db = "mysql:dbname=sample0612"; "localhost" ;
$db_selected = new PDO($db , 'zosokh' , '0000');;
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>trialデータベースを選択しました。</p>');

$st = $db_selected->query("SELECT * FROM ITEMS");
$ITEMS = $st->fetchAll();

print_r($ITEMS);

$st2 = $db_selected->query('SET NAMES utf8');

$st2 = $db_selected->query("SELECT * FROM COLOR");
$COLOR_LABEL = $st2->fetch(PDO::FETCH_ASSOC);

print_r($COLOR_LABEL);



// $ITEMS = array(     array('id' => 'iphonecase', 'img' => 'image/goods_iphone_cover.jpg', 'name' => 'iPhone Cover'),
//                     array('id' => 'gz1', 'img' => 'image/goods_gazelle_1.jpg', 'name' => 'GAZLLE_first'),
//                     array('id' => 'gz2', 'img' => 'image/goods_gazelle_2.jpg', 'name' => 'GAZLLE_second')
// );

// $COLOR_LABEL = array(
// 	'red' => 'レッド',
// 	'blue' => 'ブルー',
// 	'green' => 'グリーン',
// );



?>