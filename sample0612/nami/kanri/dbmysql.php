<?php

// PDOのやつ
$db = "mysql:dbname=sample0612"; "localhost" ;
$db_selected = new PDO($db , 'zosokh' , '0000');;
$db_selected->query('SET NAMES utf8');
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