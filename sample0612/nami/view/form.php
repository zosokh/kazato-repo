<?php

assert(isset($vo));
assert(is_array($vo));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code</title>
    <link href="css/bootstrap.css" rel="stylesheet"　type="text/css" media="all">
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body >
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:#444;">
            <ul class="nav navbar-nav">
                <li class="active nav"><a href="#">Home</a></li>
                <li><a href="#">kazato-hiei.net</a></li>
            </ul>
        </nav>
        <div id="wrapaper">
            <div id="header">

                <div class="page-header hero-head" style="border-bottom:1px solid #CCC;">
                    <div class="title">
                        <h4>EC SITE</h4>
                    </div>
                    <div class="head_btn">
                        <a href="cart.php?callcart"><button type="button" class="btn btn-success">カートへ</button></a>
                        <a href="kanri/"><button type="button" class="btn btn-danger">管理ページへ</button></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="itemlist_h1">
                    <h1>ITEM LIST</h1>
                </div>

                <?php foreach ($ITEMS as $item) { ?>
                <div class="col-md-3 col-sm-6" style="background-color: #FFF;">
                      <div class="thumbnail ">
                        <div class="item_imgbox">
                            <img class="img-rounded img-responsive" src="<?php echo $item['img']; ?>" alt="">
                        </div>
                        <div class="caption">
                          <h4><?php echo $item['name']; ?></h4>
                          <p><a href="itemdetail_info.php?<?php echo $item['id']; ?>" class="btn btn-danger btn-lg" style="width:100%;">商品ページへ</a>
                        </div>
                      </div>
                </div>
                <?php } ?>

            </div>
            <div id="footer">
                <div class="jumbotron black_footer">
                </div>
            
            </div>

        </div>
    </div>


</body>
</html>