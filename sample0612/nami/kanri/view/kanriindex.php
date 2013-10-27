<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
</head>
<body >
   <!--  <form method="POST" action="preview.php"> -->
        <div style="text-align:center;">


            <?php foreach ($ITEMS as $item) { ?>

            <div style="width:450px; margin-left:auto; margin-right:auto;">
                <table>
                    <tr>
                        <td>
                            <img style="width:200px; height:200px;" src="../<?php echo $item['img']; ?>">
                        </td>

                        <td>
                        <p>商品名</p>
                        <p style="padding-top:5px;"><?php echo $item['name'] ?></p>
                        <p style="padding-top:5px;">説明文</p>
                        <p style="padding-top:5px;"><?php echo $item['comment'] ?></p>
                        </td>

                        <td width="80">
                            <p><?php echo $item['price'] ?> 円</p>
                            <p><a href="edit.php?id=<?php echo $item['id'] ?>">修正</a></p>
                            <p><a href="upload.php?id=<?php echo $item['id'] ?>">画像</a></p>
                            <p><a href="delete.php?id=<?php echo $item['id'] ?>" onclick="return confirm('削除してよろしいですか？')">削除</a></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="clear:both;">
            </div>

            <?php } ?>

            <div>
                <a href="insert.php">新規追加</a>　
                <a href="../index.php" target="_blank">サイト確認</a>
            </div>

        </div>

        <div style="clear:both;">
        </div>

        

   <!--  </form> -->

</body>
</html>