<?php

$phone_num = "入力してください";
if (isset($_GET['phone_num'])) {
    $phone_num = $_GET['phone_num'];
}

$itemError = false;
if (isset($_GET['itemError'])) {
    $itemError = true;
}

$detailError = false;
if (isset($_GET['detailError'])) {
    $detailError = true;
}


require 'itemlist.php';

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
    <title>Sample code！がんばろう</title>



</head>

<body >


    <div style="text-align:center;">
        
        <?php
        if ($itemError) {
            echo '<p style="color:#FF0000;">商品を選択してください</p>';
        } else if ($detailError) {
            echo '<p style="color:#FF0000;">住所、電話番号の入力をご確認ください</p>';
        }
        ?>


        <?php foreach ($items as $goods) { ?>
        <div style="width:400px; margin-left:auto; margin-right:auto;">
            <div style="text-align:center; float:left; padding-right:50px;">
                <img  style="width:200px; height:200px;" src="<?php echo $goods['img']?>">
            </div>

            <div style="text-align:center; padding-top:50px; float:left;">
                <form method="POST" action="goodsform.php">
                    <div>
                        <select name="<?php echo "color_" . $goods['id'] ?>">
                            <option value="red">red</option>
                            <option value="blue">blue</option>
                            <option value="green">green</option>
                        </select>
                        <select name="<?php echo "qty_" . $goods['id'] ?>">
                            <option value="zero">選択する</option>
                            <?php
                              for ($i = 1; $i <= 9; $i++) {
                                echo "<option value='$i'>$i 個</option>";

                              }
                            ?>
                        </select>
                    </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <?php } ?>

<!--         <div style="width:400px; margin-left:auto; margin-right:auto;">
            <div style="text-align:center; float:left; padding-right:50px;">
                <img  style="width:200px; height:200px;" src="image/goods_iphone_cover.jpg">
            </div>

            <div style="text-align:center; padding-top:50px; float:left;">
                <form method="POST" action="goodsform.php">
                    <div>
                        <select name="color">
                            <option value="red">red</option>
                            <option value="blue">blue</option>
                            <option value="green">green</option>
                        </select>
                        <select name="qty">
                            <option value="zero">選択する</option>
                            <option value="1">1個</option>
                            <option value="2">2個</option>
                            <option value="3">3個</option>
                            <option value="4">4個</option>
                            <option value="5">5個</option>
                            <option value="6">6個</option>
                            <option value="7">7個</option>
                        </select>
                    </div>
            </div>
        </div>
        <div style="clear:both;"></div>

        <div style="width:400px; margin-left:auto; margin-right:auto;">
            <div style="text-align:center; float:left; padding-right:50px;">
                <img  style="width:200px; height:200px;" src="image/goods_gazelle_1.jpg">
            </div>

            <div style="text-align:center; padding-top:50px; float:left;">
                    <div>
                        <select name="color_gz_1">
                            <option value="red">red</option>
                            <option value="blue">blue</option>
                            <option value="green">green</option>
                        </select>
                        <select name="qty_gz_1">
                            <option value="zero">選択する</option>
                            <option value="1">1個</option>
                            <option value="2">2個</option>
                            <option value="3">3個</option>
                            <option value="4">4個</option>
                            <option value="5">5個</option>
                            <option value="6">6個</option>
                            <option value="7">7個</option>
                        </select>
                    </div>
            </div>
        </div>
        <div style="clear:both;"></div>

        <div style="width:400px; margin-left:auto; margin-right:auto;">
            <div style="text-align:center; float:left; padding-right:50px;">
                <img  style="width:200px; height:200px;" src="image/goods_gazelle_2.jpg">
            </div>

            <div style="text-align:center; padding-top:50px; float:left;">
                    <div>
                        <select name="color_gz_2">
                            <option value="red">red</option>
                            <option value="blue">blue</option>
                            <option value="green">green</option>
                        </select>
                        <select name="qty_gz_2">
                            <option value="zero">選択する</option>
                            <option value="1">1個</option>
                            <option value="2">2個</option>
                            <option value="3">3個</option>
                            <option value="4">4個</option>
                            <option value="5">5個</option>
                            <option value="6">6個</option>
                            <option value="7">7個</option>
                        </select>
                    </div>
            </div>
        </div>
        <div style="clear:both;"></div> -->
    </div>

    <div style="clear:both;"></div>

    <div style="text-align:center; margin-top:50px;">

            <div style="margin-top:20px;">
                <span>電話番語を入力してください</span><br>
                <input type="text" name="phone_num" value="<?php echo $phone_num ?>">
                
            </div>

            <div style="margin-top:20px;">
                <span>住所を入力してください</span><br>
                <textarea name="adress" rows="8" cols="40">
                </textarea>
            </div>

        
        <input type="submit" value="注文を確定する !!!!" name="_submit_check">

        </form>

    </div>


     



            

</body>
</html>