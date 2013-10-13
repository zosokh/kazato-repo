<meta charset="utf-8">

<?php
$link = mysql_connect('localhost', 'zosokh', '0000');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('sample0612', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>Itemsのデータベースを選択しました。</p>');


mysql_set_charset('utf8');

$result = mysql_query('SELECT id,img,name FROM ITEMS');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(',img='.$row['img']);
    print(',name='.$row['name']);
    print('</p>');
}

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}


?>