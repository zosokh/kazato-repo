<meta charset="utf-8">
<!-- <html>
<head>
<title>PHP TEST</title>
</head>
<body> -->

<?php

$link = mysql_connect('localhost','zosokh','0000' );
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('sample0612', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

$result = mysql_query('SELECT id,img,name,color FROM ITEMS');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}


// $ITEMS = array(mysql_fetch_assoc($result));

// print_r($ITEMS);



function challenge(){
	global $result;

	$results = array();
	$rows = mysql_num_rows($result);
	for ($i = 0; $i < $rows; $i++) {
		$row = mysql_fetch_assoc($result);
		$results[$i] = $row;
	}

	// $results = array();
	// while ($row = mysql_fetch_assoc($result)) {
	// 	array_push($results, $row);
	// }
	var_dump($results);

	return $results;

	// while (1) {

	// }

	// while (0) {

	// }

	// while ("hoge") {

	// }

	// while (null) {

	// }

	// while ($row = mysql_fetch_assoc($result)) {
	//     // print('<p>');
	//     // print_r($row['id']);
	//     // print_r(','.$row['img']);
	//     // print_r(','.$row['name']);
	//     // print('</p>');
	//     print_r($row);
	// }

}

$ITEMS = challenge();

// print_r($ITEMS);



// $ITEMS = array($row);

// $ITEMS = array(mysql_fetch_assoc($result));

// echo $ITEMS;


// $db = "mysql:dbname=trial"; "localhost" ;
// $db_selected = new PDO($db , 'zosokh' , '0000');;
// if (!$db_selected){
//     die('データベース選択失敗です。'.mysql_error());
// }

// print('<p>trialデータベースを選択しました。</p>');

// $st = $db_selected->query('SET NAMES utf8');
// $st = $db_selected->query("SELECT * FROM ITEMS");
// $ITEMS = $st->fetchAll();

// print_r($ITEMS);

// $st2 = $db_selected->query('SET NAMES utf8');

// $st2 = $db_selected->query("SELECT * FROM COLOR");
// $COLOR_LABEL = $st2->fetch(PDO::FETCH_ASSOC);

// print_r($COLOR_LABEL);




// $close_flag = mysql_close($link);

// if ($close_flag){
//     print('<p>切断に成功しました。</p>');
// }

?>
<!-- </body>
</html>
 -->