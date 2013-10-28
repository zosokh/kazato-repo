<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet"　type="text/css" media="all">
    <link rel="stylesheet" href="../css/main.css" type="text/css" media="all">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body >
    <div class="container-fluid">

        <div id="wrapaper">
            <div id="header">

                <div class="page-header " style="border-bottom:1px solid #CCC;">
                    <div class="title">
                        <h4>EC SITE - アイテムの編集</h4>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom:30px;">
                <div style="text-align:right;" class="col-md-12 col-sm-12">
                  <a href="index.php" class="btn btn-success">管理トップへ</a>　
                </div>

                <div style="text-align:center;" >
                    <?php if ($error) echo "<span style='color:#FF0000;' class=\"error\">$error</span>" ?>
                </div>


                <div style="text-align:center; margin-top:20px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <form action="edit.php" method="post">

                        <div style="margin-top:20px; text-align:left" class="form-group">
                            <p>商品ID</p>
                            <input type="text" class="form-control" placeholder="商品ID" name="id" value="<?php echo $id ?>" >
                        </div>

                        <div style="margin-top:20px; text-align:left" class="form-group">
                            <p>商品名</p>
                            <input type="text" class="form-control" placeholder="商品名" name="name" value="<?php echo $name ?>">
                        </div>

                        <div style="margin-top:20px; text-align:left" class="form-group">
                            <p>商品説明</p>
                            <textarea name="comment" class="form-control" placeholder="商品説明" rows="10" cols="60" ><?php echo $comment ?></textarea>
                        </div>

                        <div style="margin-top:20px; text-align:left" class="form-group">
                            <p>価格</p>
                            <input type="text" class="form-control" placeholder="価格" name="price" value="<?php echo $price ?>">
                        </div>

                        <div style="margin-top:20px; text-align:left" class="form-group">
                            <p>カラー</p>
                            <input type="text" class="form-control" placeholder="カラー" name="color" value="<?php echo $color ?>">
                        </div>
                        
                        <div style="margin-top:20px;">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input class="btn btn-danger btn-lg" type="submit" name="submit" value="更新">
                        </div>

                    </form>

                </div>

            </div><!-- row -->
        </div><!-- wrapaper -->
    </div><!-- container-fluid -->







</body>
</html>