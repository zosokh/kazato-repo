<?php

assert(isset($vo));
assert(is_array($vo));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
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
<body >
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
                        <h4>EC SITE - お客様情報をご記入ください</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div style="text-align:center;">
                    <?php
                    if ($vo['itemError']) {
                        echo '<h4 style="color:#FF0000;">' . $vo['itemError'] . '</h4>';
                    }
                    ?>
                </div>

                <div style="text-align:right;" class="col-md-12 col-sm-12">
                  <a href="index.php" class="btn btn-success">お買い物に戻る</a>　
                  <a href="cart.php?callcart" class="btn btn-warning">カートに戻る</a>
                </div>

                <form method="POST" action='submitmail.php'>

                    <div style="text-align:center; margin-top:20px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                        <div style="margin-top:20px;">
                            <input type="text" class="form-control" placeholder="お名前をフルネームで入力してください" name="<?php echo PARAM_GUESTNAME; ?>" value="<?php echo $vo['guestname']; ?>">
                        </div>

                        <div style="margin-top:20px;">
                            <input type="text" ype="text" class="form-control" placeholder="電話番語を入力してください" name="<?php echo PARAM_PHONE; ?>" value="<?php echo $vo['phone']; ?>">
                        </div>

                        <div style="margin-top:20px;">
                            <textarea class="form-control" placeholder="住所を入力してください" name="<?php echo PARAM_ADDRESS; ?>" rows="8" cols="40"><?php echo $vo['address']; ?></textarea>
                        </div>
                        
                        <div style="margin-top:20px;">
                            <input class="btn btn-danger btn-lg" type="submit" name="submit" value="注文を確定する !!!!">
                        </div>

                    </div>

                </form>
                
            </div><!-- row -->
        </div><!-- wrapaper -->
    </div><!-- container-fluid -->

</body>
</html>