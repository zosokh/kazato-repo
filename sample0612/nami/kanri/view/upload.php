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
                        <h4>EC SITE - アイテム画像のアップロード</h4>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div style="text-align:right;" class="col-md-12 col-sm-12">
                  <a href="index.php" class="btn btn-success">管理トップへ</a>　
                </div>

                <div style="text-align:center;" >
                    <?php if ($error) echo "<span style='color:#FF0000;' class=\"error\">$error</span>" ?>
                </div>

                <div style="text-align:center; margin-top:20px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <label for="exampleInputFile">商品画像</label>
                            <input type="file" name="pic">
                        </div>
                            
                        
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input class="btn btn-default"  type="submit" name="submit" value="追加">
                        </div>
                    </form>
                </div>

            </div><!-- row -->
        </div><!-- wrapaper -->
    </div><!-- container-fluid -->

</body>
</html>