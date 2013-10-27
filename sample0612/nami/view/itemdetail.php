<?php

assert(isset($vo));
assert(is_array($vo));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
</head>
<body >
    <form method="POST" action="cart.php">
        <div style="text-align:center;">

        <?php
        if ($vo['itemError']) {
            echo '<p style="color:#FF0000;">' . $vo['itemError'] . '</p>';
        }
        ?>

            <?php foreach ($ITEMS as $item) { 
                if (array_key_exists( $item["id"],$_GET )) { ?>

            <div style="width:450px; margin-left:auto; margin-right:auto;">
                <div style="text-align:center; float:left; padding-right:50px;">
                    <img style="width:200px; height:200px;" src="<?php echo $item['img']; ?>">
                </div>

                <div style="text-align:center; padding-top:10px; float:left;">
                    <div style="text-align:left;">
                        <p><?php echo $item['name']?></p>
                    </div>
                    <div style="text-align:left;">
                        <span><?php echo $item['comment']?></span>
                    </div>
                    <div style="margin-top:20px;">
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

            
        <div style="text-align:center; margin-top:50px;">
            
            <input type="submit" name="submit" value="カートに入れる">
            <input type="hidden" name="code" value="<?php echo $item["id"] ?>">

        </div>


        <?php } } ?>

        </div>


    </form>

</body>
</html>