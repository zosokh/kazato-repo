<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sample code！</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h4>EC SITE - CART</h4>
                    </div>
                </div>
            </div>

            <div class="row">

              <div class="col-md-12 col-sm-12 table-responsive">
                <table class="table table-striped">
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

              <div class="col-md-12 col-sm-12" style="margin-top:20px;">
                  <div class="">
                    <div class="col-md-4 col-sm-4 col-xs-4" >
                      <a href="index.php" class="btn btn-success">お買い物に戻る</a>
                    </div>
                    <?php 
                      if($sum !== 0){ ?>
                      <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-8">
                        <a href="cart_empty.php" class="btn btn-info">カートを空にする</a>　
                        <a href="buy.php" class="btn btn-danger btn-lg">購入する</a>
                      </div>
                    <?php } ?> 
                  </div>
              </div>

            </div><!-- row -->
        </div><!-- wrapaper -->
  </div><!-- container-fluid -->


</body>
</html>