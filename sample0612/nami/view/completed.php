<?php

assert(isset($vo));
assert(is_array($vo));

?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html: charset=utf-8;" />
    <link href="css/bootstrap.css" rel="stylesheet"　type="text/css" media="all">
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="container-fluid">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:#444;">
            <ul class="nav navbar-nav">
                <li class="active nav"><a href="index.php">Home</a></li>
            </ul>
        </nav>
    
        <div id="wrapaper">
            <div id="header">

                <div class="page-header " style="border-bottom:1px solid #CCC;">
                    <div class="title">
                        <h4>EC SITE - 商品購入が完了しました</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div style="text-align:center; padding-top:25px; color:#c7254e;" class="alert alert-warning">
                    <h4>ご注文ありがとうございました！</h4>
                </div>

                <div class="col-md-12 col-sm-12 table-responsive">
                    <table class="table table-striped">
                        <thead><tr><th colspan="5" style="text-align: center">注文した内容</th></tr></thead>
                        <thead><tr><th>商品名</th><th>色</th><th>単価</th><th>数量</th><th>小計</th></tr></thead>
                        <?php foreach($rows as $r) { ?>
                          <tr>
                            <td>
                              <div style="text-align:center;">
                                <?php echo '<img class="img-rounded " src="' . $r['img'] . '" style="width:100px; height:100px;" />' ?>
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
                        <tr><td colspan='3'> </td><td><strong>合計</strong></td><td><?php echo $sum ?> 円</td></tr>
                    </table>

                  </div>

                  <div lass="col-md-12 col-sm-12" style="margin-top:20px; text-align:center;">
                    <a href="index.php" class="btn btn-success">戻る</a>
                  </div>
            </div><!-- row -->

        </div><!-- wrapaper -->
  </div><!-- container-fluid -->


</body>
</html>