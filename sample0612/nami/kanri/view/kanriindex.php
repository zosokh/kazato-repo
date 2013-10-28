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
                        <h4>EC SITE - アイテム管理画面</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 table-responsive">
                    <table class="table table-striped" >
                        <thead><tr><th>商品画像</th><th>商品名</th><th>価格</th><th>説明文</th><th>色</th><th>編集</th></tr></thead>
                        <?php foreach ($ITEMS as $item) { ?>
                          <tr>
                            <td>
                                <img style="width:100px; height:100px;" class="img-rounded " src="../<?php echo $item['img']; ?>">
                            </td>
                            <td>
                                    <p><?php echo $item['name'] ?></p>
                            </td>
                            <td><?php echo $item['price'] ?>円</td>
                            <td width="30%">
                                <div style="width:300px;overflow:scroll; text-overflow: ellipsis;">
                                    <?php echo $item['comment'] ?></td>
                                </div>
                            <td><?php echo $item['color'] ?> </td>
                            <td >
                                <div>
                                    <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-primary btn-sm" >修正</a>
                                </div>
                                <div>
                                    <a href="upload.php?id=<?php echo $item['id'] ?>" class="btn btn-primary btn-sm" style="margin-top:8px;">画像</a>
                                </div>
                                <div>
                                    <a href="delete.php?id=<?php echo $item['id'] ?>" onclick="return confirm('削除してよろしいですか？')" class="btn btn-primary btn-sm" style="margin-top:8px;">削除</a>
                                </div>
                            </td>
                          </tr>
                        <?php } ?>
                    </table>
                </div>

                <div class="col-md-12 col-sm-12" style="margin-top:20px;" style="text-align:center;">
                      <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4">
                        <a href="insert.php" class="btn btn-danger">アイテム新規追加</a>　
                        <a href="../index.php" target="_blank" class="btn btn-info ">サイト確認</a>
                      </div>
                </div>

            </div><!-- row -->
        </div><!-- wrapaper -->
    </div><!-- container-fluid -->

</body>
</html>