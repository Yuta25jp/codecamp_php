<?php
$today = date("s");

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>課題中級</title>
</head>
<body>
    <p><?php 
    if($today === '00'){
        print 'ジャストタイム！<br />';
        print 'アクセスした瞬間の秒は' . $today . 'でした<br />';
    } else if(substr($today, 0, 1) == substr($today, 1, 1)){
        print 'ゾロ目！<br />';
        print 'アクセスした瞬間の秒は' . $today . 'でした<br />';
    } else {
        print '外れ<br />';
        print 'アクセスした瞬間の秒は' . $today . 'でした<br />';
    }
    ?>
    </p>

</body>
</html>