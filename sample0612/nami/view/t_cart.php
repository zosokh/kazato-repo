<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>カート | Noodle Shop</title>

</head>
<body>
<h1>カート</h1>
<table>
  <tr><th>商品名</th><th>色</th><th>単価</th><th>数量</th><th>小計</th></tr>
  <?php foreach($rows as $r) { ?>
    <tr>
      <td>
        <div style="text-align:center;">
          <?php echo '<img src="' . $r['img'] . '" style="width:100px; height:100px;" />' ?>
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
  <tr><td colspan='2'> </td><td><strong>合計</strong></td><td><?php echo $sum ?> 円</td></tr>
</table>
<div class="">
  <a href="index.php">お買い物に戻る</a>　
  <?php 
    if($totalQty !== 0){ ?>
      <a href="cart_empty.php">カートを空にする</a>　
      <a href="buy.php">購入する</a>
  <?php } ?> 
</div>
</body>
</html>