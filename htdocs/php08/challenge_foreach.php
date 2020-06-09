<?php
 $class = ['ガリ勉' => '鈴木', '委員長' => '佐藤', 'セレブ' => '斎藤', 'メガネ' => '伊藤', '女神' => '杉内'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>名前とアダ名表示</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<?php
 foreach ($class as $key => $value) {
?>
 <p><?php print $value ?>さんのあだ名は<?php print $key ?>です</p>
<?php
}
?>
</body>
</html>