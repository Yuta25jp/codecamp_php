<?php 
$rand = mt_rand(1,6);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <p>出た数字:<?php print $rand; ?></p>
<?php if ($rand % 2 == 0 ) {?>
    <p>偶数</p>
<?php } else { ?>
    <p>奇数</p>
<?php } ?>

</body>
</html>