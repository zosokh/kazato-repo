<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
</head>
<body >
   <!--  <form method="POST" action="preview.php"> -->
        <div style="text-align:center;">


            <div style="width:450px; margin-left:auto; margin-right:auto;">
                <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
                  <form action="insert.php" method="post">
                    <p>
                        商品ID<br>
                        <input type="text" name="id" value="<?php echo $id ?>">
                    </p>
                    <p>
                        商品名<br>
                        <input type="text" name="name" value="<?php echo $name ?>">
                    </p>
                    <p>
                        商品説明<br>
                        <textarea name="comment" rows="10" cols="60"><?php echo $comment ?></textarea>
                    </p>
                    <p>
                        価格<br>
                        <input type="text" name="price" value="<?php echo $price ?>">
                    </p>
                    <p>
                        カラー<br>
                        <input type="text" name="color" value="<?php echo $color ?>">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="追加">
                    </p>
                  </form>
            </div>
            <div style="clear:both;">
            </div>

            <div>
                <a href="index.php" >管理トップへ</a>
            </div>

        </div>

        <div style="clear:both;">
        </div>

        

   <!--  </form> -->

</body>
</html>