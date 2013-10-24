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
    <form method="POST" action="preview.php">
        <div style="text-align:center;">

        <?php
        // if ($vo['itemError']) {
        //     echo '<p style="color:#FF0000;">' . $vo['itemError'] . '</p>';
        // }
        ?>

            <?php foreach ($ITEMS as $item) { ?>

            <div style="width:450px; margin-left:auto; margin-right:auto;">
                <div style="text-align:center; float:left; padding-right:50px;">
                    <img style="width:200px; height:200px;" src="<?php echo $item['img']; ?>">
                </div>

                <div style="text-align:center; padding-top:50px; float:left;">
                    <div>
                        
                        <p><?php echo $item['name']; ?></p>
                    </div>
                    <div>
                        <a href="itemdetail_info.php?<?php echo $item['id']; ?>"><p>商品を見る</p></a>
                    </div>
                </div>
            </div>
            <div style="clear:both;">
            </div>

            <?php } ?>

        </div>

        <div style="clear:both;">
        </div>

        

    </form>

</body>
</html>