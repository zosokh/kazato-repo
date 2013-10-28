<?php

assert(isset($vo));
assert(is_array($vo));

?>

<!DOCTYPE html>
<html lang="ja">
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
                        <h4>EC SITE - ITEM</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div style="text-align:center; margin-bottom:20px;">
                    <p>
                        <?php
                        if ($vo['itemError']) {
                            echo '<h4 style="color:#FF0000;">' . $vo['itemError'] . '</h4>';
                        }
                        ?>
                    </p>
                </div>

                <form method="POST" action="cart.php">
                    <?php foreach ($ITEMS as $item) { 
                                if (array_key_exists( $item["id"],$_GET )) { ?>
                    <div class="col-md-4 col-sm-4" style="background-color: #FFF;">
                        <div style="text-align:center; ">
                            <img class="img-rounded img-responsive" src="<?php echo $item['img']; ?>">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8" style="background-color: #FFF;">
                        <div style="text-align:left;">
                            <h4><?php echo $item['name']?></h4>
                        </div>
                        
                        <div style="text-align:left;">
                            <span><?php echo $item['comment']?></span>
                        </div>

                        <div style="text-align:left;">
                            <h3 ><span style="color:#d43f3a;"><?php echo $item['price']?>円</span></h3>
                        </div>

                        <div style="margin-top:20px;text-align:left;" class="col-md-12 col-sm-12">
                            <div class="col-md-6 col-sm-6" style="background-color: #FFF;">
                                <select name="<?php echo paramNameForItemColor($item['id']) ?>" class="form-control input-sm">

                                    <?php 

                                    if ($item['color'] == "none"){
                                    echo optionTag('none' , $vo['itemData'][$item['id']]['color'] , "色指定不可");
                                    } else{

                                    echo optionTag('red', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['red']);
                                    echo optionTag('blue', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['blue']);
                                    echo optionTag('green', $vo['itemData'][$item['id']]['color'], $COLOR_LABEL['green']);
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6" style="background-color: #FFF;">
                                <select name="<?php echo paramNameForItemQuantity($item['id']) ?>" class="form-control input-sm">
                                    <option value= "0">選択する</option>

                                    <?php
                                    for ($i = 1; $i <= 9; $i++) {
                                        echo optionTag($i, $vo['itemData'][$item['id']]['qty'], $i . ' 個');
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div clas="clear"></div>

                        <div class="col-md-12 col-sm-12" style="text-align:center; margin-top:50px;"  >
            
                            <input class="btn btn-danger btn-lg" type="submit" name="submit" value="カートに入れる">
                            <input type="hidden" name="code" value="<?php echo $item["id"] ?>">

                        </div>
                    </div>

                    

                    <?php } } ?>
                 </form>

            </div>


        </div>
    </div>
</body>
</html>