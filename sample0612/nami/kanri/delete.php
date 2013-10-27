<?php

require_once 'common.php';

$pdo = $db_selected;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$st = $pdo->query("DELETE FROM ITEMS WHERE id='{$_GET['id']}'");

header('Location: index.php');

?>
