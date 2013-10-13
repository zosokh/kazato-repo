<?php

require 'common.php';

// 入力受け取り
$vo = receiveInput($_POST);

showCompleted($vo);
