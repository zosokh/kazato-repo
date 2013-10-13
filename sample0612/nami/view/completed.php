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
    <div style='text-align:center;'>

        <table style="margin: auto;">
            <tr><th colspan="3" style="text-align: center">注文した内容</th></tr>
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
        <a href="index.php">戻る</a>
    </div>
</body>
</html>