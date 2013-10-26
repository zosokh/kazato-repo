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

        <div style="text-align:center; padding:20px;">
            <p>ご注文ありがとうございました！</p>
        </div>

        <table style="margin: auto;">
            <tr><th colspan="3" style="text-align: center">注文した内容</th></tr>
            <tr><th>商品名</th><th>単価</th><th>数量</th><th>小計</th></tr>

            <?php foreach($rows as $r) { ?>
                <tr>
                  <td>
                    <div style="text-align:center;">
                      <?php echo '<img src="' . $r['img'] . '" style="width:100px; height:100px;" />' ?>
                    </div>
                    <div style="text-align:center;">
                      <p><?php echo $r['name'] ?></p>
                    </div>
                  </td>
                  <td><?php echo $r['selectcolor'] ?></td>
                  <td><?php echo $r['price'] ?></td>
                  <td><?php echo $r['num'] ?></td>
                  <td><?php echo $r['price'] * $r['num'] ?> 円</td>
                </tr>
            <?php } ?>
            <tr><td colspan='2'> </td><td><strong>合計</strong></td><td><?php echo $sum ?> 円</td></tr>
            
        </table>
        <a href="index.php">戻る</a>
    </div>
</body>
</html>