<?php
// $link = mysql_connect('localhost', 'zosokh', '0000');
// if (!$link) {
//     die('接続失敗です。'.mysql_error());
// }

// // print('<p>接続に成功しました。</p>');

// $db_selected = mysql_select_db('sample0612', $link);
// if (!$db_selected){
//     die('データベース選択失敗です。'.mysql_error());
// }

// // print('<p>Itemsのデータベースを選択しました。</p>');


// mysql_set_charset('utf8');

// $result = mysql_query('SELECT id,img,name,color FROM ITEMS');
// if (!$result) {
//     die('クエリーが失敗しました。'.mysql_error());
// }

// $resultcolor = mysql_query('SELECT red,blue,green,none FROM COLOR');
// if (!$resultcolor) {
//     die('クエリーが失敗しました。'.mysql_error());
// }

// $ITEMS = array();
// $COLOR_LABEL = mysql_fetch_assoc($resultcolor);

// while ($row = mysql_fetch_assoc($result)) {
//     array_push($ITEMS, $row);
// }

// while ($row2 = mysql_fetch_assoc($resultcolor)) {
//     array_push($COLOR_LABEL, $row2);
// }










// PDOのやつ
$db = "mysql:dbname=sample0612"; "localhost" ;
$db_selected = new PDO($db , 'zosokh' , '0000');;
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

// print('<p>trialデータベースを選択しました。</p>');

$st = $db_selected->query("SELECT * FROM ITEMS");
$ITEMS = $st->fetchAll();

// print_r($ITEMS);

$st2 = $db_selected->query('SET NAMES utf8');

$st2 = $db_selected->query("SELECT * FROM COLOR");
$COLOR_LABEL = $st2->fetch(PDO::FETCH_ASSOC);

// print_r($COLOR_LABEL);





?>