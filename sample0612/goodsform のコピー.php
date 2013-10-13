<?php


        //*環境設定*************************************

        require 'itemlist.php';

        //**POSTデータ受け取り**************************
        //カラー
        $color_order = $_POST["color"];
        $color_order_gz1 = $_POST["color_gz_1"];
        $color_order_gz2 = $_POST["color_gz_2"];

        //個数
        $qty_order = $_POST["qty"] ."\n";
        $qty_order_gz1 = $_POST["qty_gz_1"];
        $qty_order_gz2 = $_POST["qty_gz_2"];

        // 全ての商品が未選択だった場合
        if ($_POST["qty"] == "zero" && $_POST["qty_gz_1"] == "zero" && $_POST["qty_gz_1"] == "zero"){
            header('Location: index.php?itemError=1&phone_num=' . $_POST["phone_num"]);
            exit;
        }

        // iPhone Cover
        if ($_POST["qty"] == "zero"){
            $iPhone = null;
        }else{
            $iPhone = "iPhone Cover" ."\n" . "■色: ". $color_order."\n" . "■個数：" . $qty_order ."個" . "\n" . "<br>";
        }

        // Gazlle_1
        if ($_POST["qty_gz_1"] == "zero"){
            $gazzle_1 = null;
        }else{
            $gazzle_1 = "GAZLLE_first" ."\n" . "■色: ". $color_order_gz1 ."\n" . "■個数：" . $qty_order_gz1 ."個" ."\n" . "<br>";
        }
        

        // Gazlle_2
        if ($_POST["qty_gz_2"] == "zero"){
            $gazzle_2 = null;
        }else{
            $gazzle_2 = "GAZLLE_second" ."\n" . "■色: ". $color_order_gz2 ."\n" . "■個数：" . $qty_order_gz2 ."個" ."\n" . "<br>";
        }
        

        //電話番号
        $phone_num_order = "■電話番号：" . $_POST["phone_num"] ."\n" ;
        //住所
        $adress_order = "■住所：" . $_POST["adress"] ."\n";
        
        //全ての情報
        $order_info = $iPhone . $gazzle_1 . $gazzle_2 . $phone_num_order . $adress_order ;

        //*********************


        // 電話番号、住所の入力チェック
        if (preg_match('/^[\w\d]+$/' , $_POST['phone_num']) == false || $_POST['adress'] == "                ") {
            validate_form();
        }
        else {
            process_form();        
        }

?>

        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html: charset=utf-8;" />
        <body >

<?php

        function process_form(){
            global $iPhone , $gazzle_1 , $gazzle_2 , $phone_num_order , $adress_order , $order_info;


            echo "こちらの商品を確定しますか？また入力情報に間違いはないですか？";

            echo "<div style='text-align:center;'>";
            echo "<img  style='width:100px; height:100px;' src='image/goods_iphone_cover.jpg'>";
            echo "<img  style='width:100px; height:100px;' src='image/goods_gazelle_1.jpg'>";
            echo "<img  style='width:100px; height:100px;' src='image/goods_gazelle_2.jpg'>";
            echo "</div> ";

            echo "<div style='text-align:center;'>";
            echo "$iPhone";
            echo "$gazzle_1";
            echo "$gazzle_2";
            echo "$phone_num_order <br>";
            echo "$adress_order <br>";
            echo "<form method='POST' action='sendingmail.php'>";
            echo "<input type='submit' value='確かに注文を確定する !!!!' name='_kakutei_order'>";
            echo "<input type='hidden' name='order_mail' value='$order_info'>";
            echo "</form>";
            echo "</div>";

        }


        function validate_form(){
            header('Location: index.php?detailError=1');
            exit;
        }

?>


    </body>
