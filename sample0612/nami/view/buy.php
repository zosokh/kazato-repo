<?php

assert(isset($vo));
assert(is_array($vo));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Sample code！がんばろう</title>
</head>
<body >
    <form method="POST" action='submitmail.php'>
        <div style="text-align:center;">

        <?php
        if ($vo['itemError']) {
            echo '<p style="color:#FF0000;">' . $vo['itemError'] . '</p>';
        }
        ?>

        </div>


        <div style="text-align:center; margin-top:50px;">

            <div style="margin-top:20px;">
                <span>お名前をフルネームで入力してください</span><br>
                <input type="text" name="<?php echo PARAM_GUESTNAME; ?>" value="<?php echo $vo['guestname']; ?>">
            </div>

            <div style="margin-top:20px;">
                <span>電話番語を入力してください</span><br>
                <input type="text" name="<?php echo PARAM_PHONE; ?>" value="<?php echo $vo['phone']; ?>">
            </div>

            <div style="margin-top:20px;">
                <span>住所を入力してください</span><br>
                <textarea name="<?php echo PARAM_ADDRESS; ?>" rows="8" cols="40"><?php echo $vo['address']; ?></textarea>
            </div>
            
            
            <input type="submit" name="submit" value="注文を確定する !!!!">
            

        </div>

        <div style="text-align:center;">
          <a href="index.php">お買い物に戻る</a>　
          <a href="cart.php?callcart">カートに戻る</a>
        </div>

    </form>

</body>
</html>