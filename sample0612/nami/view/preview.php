<?php

assert(isset($vo));
assert(is_array($vo));

?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html: charset=utf-8;" />
</head>
<body>
    <div style="text-align:center;">
        <p>こちらの商品を確定しますか？また入力情報に間違いはないですか？</p>

        <?php
        foreach ($ITEMS as $item) {
            if (0 < $vo['itemData'][$item['id']]['qty']) {
                echo '<img src="' . $item['img'] . '" style="width:100px; height:100px;" />';
            }
        }
        ?>

    </div>

    <div style='text-align:center;'>

        <table style="border: 1px solid; margin-left: auto; margin-right: auto;">
            <tr><th colspan="3" style="text-align: center">注文内容</th></tr>
            <tr><th>品目</th><th>色</th><th>個数</th></tr>

            <?php 

            foreach ($ITEMS as $item) {
                if (0 == $vo['itemData'][$item['id']]['qty']) {
                    continue;
                }
                echo '<tr>';
                echo '<td>' . $item['name'] . '</td>';
                echo '<td>' . $COLOR_LABEL[$vo['itemData'][$item['id']]['color']] . '</td>';
                echo '<td>' . $vo['itemData'][$item['id']]['qty'] . '</td>';
                echo '</tr>';
            }

            ?>

        </table>

        <form method='POST' action='submitMail.php'>
            <?php echo hiddenTags($vo['post']); ?>
            <input type='submit' value='確かに注文を確定する !!!!'>
        </form>
    </div>
</body>
</html>