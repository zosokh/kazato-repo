<?php

assert(isset($vo));
assert(is_array($vo));

?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
</head>
<body >
    <form method="POST" action="preview.php">
        <div style="text-align:center;">

        <?php
        if ($vo['itemError']) {
            echo '<p style="color:#FF0000;">' . $vo['itemError'] . '</p>';
        }
        ?>

            <?php foreach ($ITEMS as $item) { ?>

            <div style="width:450px; margin-left:auto; margin-right:auto;">
                <div style="text-align:center; float:left; padding-right:50px;">
                    <img style="width:200px; height:200px;" src="<?php echo $item['img']; ?>">
                </div>

                <div style="text-align:center; padding-top:50px; float:left;">
                    <div>
                        <select name="<?php echo paramNameForItemColor($item['id']) ?>">

                            <?php 

                            if ($item['color'] == "none"){
                            echo optionTag('none' , $vo['itemData'][$item['id']]['color'] , "色指定不可");
                            } else{

                            echo optionTag('red', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['red']);
                            echo optionTag('blue', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['blue']);
                            echo optionTag('green', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['green']);
                            }
                            ?>
                        </select>
                        <select name="<?php echo paramNameForItemQuantity($item['id']) ?>">
                            <option value= "0">選択する</option>

                            <?php
                            for ($i = 1; $i <= 9; $i++) {
                                echo optionTag($i, $vo['itemData'][$item['id']]['qty'], $i . ' 個');
                            }
                            ?>

                        </select>
                    </div>
                </div>
            </div>
            <div style="clear:both;">
            </div>

            <?php } ?>

        </div>

        <div style="clear:both;">
        </div>

        <div style="text-align:center; margin-top:50px;">

            <div style="margin-top:20px;">
                <span>電話番語を入力してください</span><br>
                <input type="text" name="<?php echo PARAM_PHONE; ?>" value="<?php echo $vo['phone']; ?>">
            </div>

            <div style="margin-top:20px;">
                <span>住所を入力してください</span><br>
                <textarea name="<?php echo PARAM_ADDRESS; ?>" rows="8" cols="40"><?php echo $vo['address']; ?></textarea>
            </div>
            
            <input type="submit" value="注文を確定する !!!!">

        </div>

    </form>

</body>
</html>