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
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <p>
                            商品画像（JPEGのみ）<br>
                            <input type="file" name="pic">
                        </p>
                        <p>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
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