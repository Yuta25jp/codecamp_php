<?php
$times = array(10, 100, 1000);
$heads = 0;
$tails = 0;
if (isset($_POST['num']) === TRUE) {
    $num = htmlspecialchars($_POST['num'], ENT_QUOTES, 'UTF-8');
        for ($i = 0; $i < $num; $i++) {
            $rand = mt_rand(0,1);
            if ($rand === 0) {
                $heads++;
            } else {
                $tails++;
            }
        }
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>head or tail</title>
<body>
    <p>表:<?php if (isset($_POST['num']) === TRUE) { echo $heads; } ?>回</p>
    <p>裏:<?php if (isset($_POST['num']) === TRUE) { echo $tails; } ?>回</p>
    <form method="post">
        <select name="num">
            <option>回数選択</option>
<?php
foreach($times as $value) {
?>            
            <option  name="num"  value= "<?php echo $value; ?>"><?php echo $value."\n"; ?></option>
<?php
}
?>
        </select>
            <span>回</span>
            <button type="submit">コイントス</button>
    </form>
    </body>
</html>